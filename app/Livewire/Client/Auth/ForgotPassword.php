<?php

namespace App\Livewire\Client\Auth;

use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class ForgotPassword extends Component
{
    use SEOTools;
    public function mount()
    {
        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()->setTitle('فراموشی رمز عبور');
    }
    public function render()
    {
        return view('livewire.client.auth.forgot-password')->layout('layouts.client.auth');
    }
}
