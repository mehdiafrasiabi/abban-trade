<?php

namespace App\Livewire\Admin\Dashboard;

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
        $this->seo()
            ->setTitle('پیشخوان');
    }
    public function render()
    {
        return view('livewire.admin.dashboard.index')->layout('layouts.admin.app');
    }
}
