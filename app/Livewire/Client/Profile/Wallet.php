<?php

namespace App\Livewire\Client\Profile;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Wallet extends Component
{

    public $amount;
    public $txid;
    public $description;

    public function submit()
    {
        $this->validate([
            'amount' => 'required|numeric|min:1000',
            'txid' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $user = Auth::user();

        // اگر کیف پول وجود نداشت بساز
        $wallet = $user->wallet()->firstOrCreate([], ['balance' => 0]);

        $wallet->transactions()->create([
            'type' => 'deposit',
            'amount' => $this->amount,
            'txid' => $this->txid,
            'description' => $this->description,
            'status' => 'pending',
        ]);

        session()->flash('message', 'درخواست واریز ثبت شد و در انتظار تایید است.');

        // پاک کردن فیلدها
        $this->reset(['amount', 'txid', 'description']);
    }

    public function render()
    {
        return view('livewire.client.profile.wallet')->layout('layouts.client.profile');
    }
}
