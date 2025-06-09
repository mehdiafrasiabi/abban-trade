<?php

namespace App\Livewire\Client\Home;

use App\Models\User;
use Livewire\Component;

class Us extends Component
{

    public $userCount;
    public $cryptoCount;

    public function mount()
    {
        $this->cryptos = \App\Models\Crypto::take(10)->get();

        $this->userCount = User::count();        // تعداد کل کاربران
        $this->cryptoCount = \App\Models\Crypto::count();    // تعداد کل ارزهای دیجیتال
    }
    public function render()
    {
        return view('livewire.client.home.us')->layout('layouts.client.app');
    }
}
