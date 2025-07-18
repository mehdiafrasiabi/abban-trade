<?php

namespace App\Livewire\Admin\Wallet;

use App\Models\WalletTransaction;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $status = [];


    public function approve($transactionId)
    {
        $transaction = WalletTransaction::with('wallet')->findOrFail($transactionId);

        if ($transaction->type === 'deposit' && $transaction->status === 'pending') {
            $wallet = $transaction->wallet;

            // افزایش موجودی کیف پول
            $wallet->increment('balance', $transaction->amount);

            // تایید تراکنش
            $transaction->update(['status' => 'approved']);

            // ارسال پیام موفقیت
            $this->dispatch('success', '✅ واریز تایید شد و به موجودی کاربر اضافه گردید.');
        }

        $this->resetPage();
    }

    public function reject($transactionId)
    {
        $transaction = WalletTransaction::findOrFail($transactionId);

        if ($transaction->status === 'pending') {
            $transaction->update(['status' => 'rejected']);

            $this->dispatch('warning','❌ تراکنش رد شد.');
        }

        $this->resetPage();
    }

    public function changeStatus($id, $status)
    {
        $transaction = WalletTransaction::find($id);

        if ($transaction) {
            $transaction->update(['status' => $status]);

            $this->dispatch('success', '✅ وضعیت با موفقیت تغییر یافت.');
        }

        $this->resetPage();
    }

    public function render()
    {
        $wallets = WalletTransaction::with('wallet.user')
            ->where('type', 'deposit')
            ->when($this->search, function ($query) {
                $query->whereHas('wallet.user', function ($q) {
                    $q->where('name', 'like', "%{$this->search}%")
                        ->orWhere('mobile', 'like', "%{$this->search}%");
                });
            })
            ->latest()
            ->paginate(10);

        return view('livewire.admin.wallet.index', [
            'wallets' => $wallets,
        ])->layout('layouts.admin.app');
    }
}
