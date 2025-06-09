<?php

namespace App\Livewire\Client\Home;

use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;
    public function mount()
    {
        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()->setTitle('خانه');
    }
    public function render()
    {
        return view('livewire.client.home.index')->layout('layouts.client.app');
    }
}
