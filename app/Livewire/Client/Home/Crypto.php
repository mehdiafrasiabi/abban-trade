<?php

namespace App\Livewire\Client\Home;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Crypto extends Component
{
    public $cryptos = [];

    public function mount()
    {
        $this->cryptos = \App\Models\Crypto::take(10)->get();
    }

    public function render()
    {
        $prices = [];
        $ids = $this->cryptos->pluck('coingecko_id')->implode(',');

        if ($ids) {
            $response = Http::get("https://api.coingecko.com/api/v3/coins/markets", [
                'vs_currency' => 'usd',
                'ids' => $ids,
                'order' => 'market_cap_desc',
                'per_page' => 100,
                'page' => 1,
                'sparkline' => false,
            ]);

            if ($response->ok()) {
                $prices = collect($response->json())->keyBy('id');
            }
        }

        return view('livewire.client.home.crypto', [
            'prices' => $prices,]
        )->layout('layouts.client.app');
    }
}
