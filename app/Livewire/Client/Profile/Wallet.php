<?php

namespace App\Livewire\Client\Profile;

use App\Models\WalletTransaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Wallet extends Component
{
    public $wallet;
    public $transactions;
    public $deposit_amount, $deposit_tx_id;
    public $withdraw_amount, $withdraw_description;
    public $notification;

    public function mount()
    {
        $user = Auth::user();
        $this->wallet = $user->wallet ?? $user->wallet()->create(['balance' => 0.00]);
        $this->loadTransactions();
    }

    public function loadTransactions()
    {
        $this->transactions = $this->wallet->transactions()->latest()->take(15)->get();
    }

    public function submitDeposit()
    {
        $this->validate([
            'deposit_amount' => 'required|numeric|min:500000',
            'deposit_tx_id' => 'required|string|max:255',
        ], [
            'deposit_amount.required' => 'مبلغ واریز الزامی است.',
            'deposit_amount.numeric' => 'مبلغ واریز باید عددی باشد.',
            'deposit_amount.min' => 'حداقل مبلغ واریز ۵۰۰٬۰۰۰ تومان است.',
            'deposit_tx_id.required' => 'کد تراکنش (TX ID) الزامی است.',
        ]);

        $this->wallet->balance += $this->deposit_amount;
        $this->wallet->save();

        WalletTransaction::create([
            'wallet_id' => $this->wallet->id,
            'type' => 'deposit',
            'amount' => $this->deposit_amount,
            'tx_id' => $this->deposit_tx_id,
            'status' => 'approved',
        ]);

        $this->reset(['deposit_amount', 'deposit_tx_id']);
        $this->notification = '✅ واریز با موفقیت انجام شد.';
        $this->loadTransactions();
    }

    public function submitWithdraw()
    {
        $this->validate([
            'withdraw_amount' => 'required|numeric|min:100000',
            'withdraw_description' => 'required|string',
        ], [
            'withdraw_amount.required' => 'مبلغ برداشت الزامی است.',
            'withdraw_amount.numeric' => 'مبلغ برداشت باید عددی باشد.',
            'withdraw_amount.min' => 'حداقل برداشت ۱۰۰٬۰۰۰ تومان است.',
            'withdraw_description.required' => 'توضیحات برداشت الزامی است.',
        ]);

        if ($this->wallet->balance < $this->withdraw_amount) {
            $this->notification = '⚠️ موجودی کافی نیست.';
            return;
        }

        $this->wallet->balance -= $this->withdraw_amount;
        $this->wallet->save();

        WalletTransaction::create([
            'wallet_id' => $this->wallet->id,
            'type' => 'withdraw',
            'amount' => $this->withdraw_amount,
            'description' => $this->withdraw_description,
            'status' => 'pending',
        ]);

        $this->reset(['withdraw_amount', 'withdraw_description']);
        $this->notification = '✅ برداشت با موفقیت ثبت شد و در حال بررسی است.';
        $this->loadTransactions();
    }

    public function render()
    {
        return view('livewire.client.profile.wallet')->layout('layouts.client.profile');
    }
}
