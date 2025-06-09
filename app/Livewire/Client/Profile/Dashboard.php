<?php

namespace App\Livewire\Client\Profile;

use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Dashboard extends Component
{
    use SEOTools;

    public function mount()
    {
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()->setTitle('داشبورد');
    }
    public function render()
    {
        return view('livewire.client.profile.dashboard')->layout('layouts.client.profile');
    }
}
