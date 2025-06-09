<?php

namespace App\Livewire\Client\Profile\Layout;

use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.client.profile.layout.sidebar')->layout('layouts.client.profile');;
    }
}
