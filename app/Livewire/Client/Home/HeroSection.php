<?php

namespace App\Livewire\Client\Home;

use Livewire\Component;

class HeroSection extends Component
{
    public function render()
    {
        return view('livewire.client.home.hero-section')->layout('layouts.client.app');
    }
}
