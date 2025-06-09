<?php

namespace App\Livewire\Client\Home;

use Livewire\Component;

class Media extends Component
{
    public function render()
    {
        return view('livewire.client.home.media')->layout('layouts.client.app');
    }
}
