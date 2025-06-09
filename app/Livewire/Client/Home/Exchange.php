<?php

namespace App\Livewire\Client\Home;

use Livewire\Component;

class Exchange extends Component
{
    public function render()
    {
        return view('livewire.client.home.exchange')->layout('layouts.client.app');
    }
}
