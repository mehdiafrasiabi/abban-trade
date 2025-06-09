<?php

namespace App\Livewire\Client\Home;

use Livewire\Component;

class FeaturesSection extends Component
{
    public function render()
    {
        return view('livewire.client.home.features-section')->layout('layouts.client.app');
    }
}
