<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Information extends Component
{
    use SEOTools;
    public User $user;


    public function mount($id)
    {
        $this->user = User::with('kyc')->findOrFail($id);
        $this->seo()->setTitle($this->user->name);
    }



    public function render()
    {
        return view('livewire.admin.user.information')->layout('layouts.admin.app');
    }
}
