<?php

namespace App\Livewire\Client\Profile;

use App\Models\Crypto;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Market extends Component
{
    public $search = '';
    public $cryptos = [];
    public $topGainer = null;
    public $topLoser = null;

    public function mount()
    {
        $this->loadCryptos();
    }

    public function updatedSearch()
    {
        $this->loadCryptos(); // هربار سرچ تغییر کرد، ارزها رو دوباره فیلتر و لود کن
    }

    public function loadCryptos()
    {
        $query = Crypto::query();

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('name_fa', 'like', "%{$this->search}%")
                    ->orWhere('name_en', 'like', "%{$this->search}%")
                    ->orWhere('symbol', 'like', "%{$this->search}%");
            });
        }

        $coins = $query->pluck('coingecko_id')->toArray();
        $coinMeta = $query->get()->keyBy('coingecko_id');

        if (count($coins)) {
            $response = Http::get('https://api.coingecko.com/api/v3/coins/markets', [
                'vs_currency' => 'usd',
                'ids' => implode(',', $coins),
            ]);

            if ($response->successful()) {
                $this->cryptos = collect($response->json())->map(function ($coin) use ($coinMeta) {
                    $coin['name_fa'] = $coinMeta[$coin['id']]->name_fa ?? '-';
                    return $coin;
                })->values()->toArray();

                $this->topGainer = collect($this->cryptos)
                    ->filter(fn($coin) => is_numeric($coin['price_change_percentage_24h']))
                    ->sortByDesc('price_change_percentage_24h')
                    ->first();

                $this->topLoser = collect($this->cryptos)
                    ->filter(fn($coin) => is_numeric($coin['price_change_percentage_24h']))
                    ->sortBy('price_change_percentage_24h')
                    ->first();
            }
        } else {
            $this->cryptos = [];
            $this->topGainer = null;
            $this->topLoser = null;
        }
    }

    public function getMarketStatusProperty()
    {
        $changes = collect($this->cryptos)->pluck('price_change_percentage_24h')->filter(fn($v) => is_numeric($v));
        $avgChange = $changes->avg();

        return [
            'status' => $avgChange > 0 ? 'bullish' : ($avgChange < 0 ? 'bearish' : 'neutral'),
            'change' => $avgChange,
        ];
    }

    public function render()
    {
        return view('livewire.client.profile.market')->layout('layouts.client.profile');
    }
}
