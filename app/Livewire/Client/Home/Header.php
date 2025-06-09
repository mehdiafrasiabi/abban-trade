<?php

namespace App\Livewire\Client\Home;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.client.home.header')->layout('layouts.client.app');
    }
}
