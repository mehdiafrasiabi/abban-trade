<?php

namespace App\Livewire\Client\Home;

use Livewire\Component;

class Cta extends Component
{
    public function render()
    {
        return view('livewire.client.home.cta')->layout('layouts.client.app');
    }
}
