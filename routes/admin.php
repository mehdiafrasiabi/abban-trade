<?php

use App\Livewire\Admin\Crypto\Create as CryptoCreate;
use App\Livewire\Admin\Dashboard\Index as DashboardIndex;
use App\Livewire\Admin\Department\Index as DepartmentIndex;
use App\Livewire\Admin\Kyc\Index as KycIndex;
use App\Livewire\Admin\Ticket\Index as TicketIndex;
use App\Livewire\Admin\Ticket\Show as TicketShow;
use App\Livewire\Admin\User\Index as UserIndex;
use App\Livewire\Admin\User\Information as UserInformation;
use App\Livewire\Admin\Wallet\Index as WalletIndex;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {

    Route::get('/dashboard', DashboardIndex::class)->name('dashboard');
    Route::get('/crypto', CryptoCreate::class)->name('crypto');
    Route::get('/user', UserIndex::class)->name('user');
    Route::get('/user/{id}', UserInformation::class)->name('user.information');
    Route::get('/kyc', KycIndex::class)->name('kyc');
    Route::get('/ticket', TicketIndex::class)->name('ticket.index');
    Route::get('/ticket/{ticket}', TicketShow::class)->name('ticket.show');
    Route::get('/department', DepartmentIndex::class)->name('department');
    Route::get('/wallet', WalletIndex::class)->name('wallet');

});
