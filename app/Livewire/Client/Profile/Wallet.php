<?php

namespace App\Livewire\Client\Profile;

use Livewire\Component;

class Wallet extends Component
{
    public function render()
    {
        return view('livewire.client.profile.wallet')->layout('layouts.client.profile');
    }
}
