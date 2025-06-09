<?php

use App\Livewire\Client\Auth\ForgotPassword as ForgotPasswordAuth;
use App\Livewire\Client\Auth\Kyc as KycAuth;
use App\Livewire\Client\Auth\Login as LoginAuth;
use App\Livewire\Client\Auth\Register as RegisterAuth;
use App\Livewire\Client\Home\Index as HomeIndex;
use App\Livewire\Client\Profile\Dashboard as ProfileDashboard;
use App\Livewire\Client\Profile\Market as ProfileMarket;
use App\Livewire\Client\Profile\Ticket\Create as CreateTicket;
use App\Livewire\Client\Profile\Ticket\Index as TicketIndex;
use App\Livewire\Client\Profile\Ticket\Show as CreateTicketShow;
use App\Livewire\Client\Profile\Trade as ProfileTrade;
use App\Livewire\Client\Profile\Wallet as ProfileWallet;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function () {

    Route::get('/', HomeIndex::class)->name('home');
    Route::get('/register', RegisterAuth::class)->name('register');
    Route::get('/user/kyc/basic',KycAuth::class)->name('kyc');
    Route::get('/login', LoginAuth::class)->name('login');
    Route::get('/forgot-password', ForgotPasswordAuth::class)->name('forgot-password');

    //profile
    Route::get('/profile/dashboard', ProfileDashboard::class)->name('profile.dashboard');
    Route::get('/profile/market', ProfileMarket::class)->name('profile.market');
    Route::get('/profile/trade/{crypto}', ProfileTrade::class)->name('profile.trade');
    Route::get('/profile/wallet',ProfileWallet::class)->name('profile.wallet');
    Route::get('/profile/ticket',TicketIndex::class)->name('profile.ticket');
    Route::get('/profile/ticket/show/{ticket}',CreateTicketShow::class)->name('profile.ticket.show');
    Route::get('/profile/ticket/create',CreateTicket::class)->name('profile.ticket.create');

});
