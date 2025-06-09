<?php

namespace App\Livewire\Client\Profile;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Trade extends Component
{
    public $crypto;
    public $data;

    public function mount($crypto)
    {
        $this->crypto = $crypto;

        $response = Http::get("https://api.coingecko.com/api/v3/coins/{$crypto}");

        if ($response->ok()) {
            $this->data = $response->json();
        } else {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.client.profile.trade')->layout('layouts.client.profile');
    }
}
