<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::livewire('login', 'auth.login')
        ->layout('layouts.auth')
        ->name('login');

    Route::livewire('register', 'auth.register')
        ->layout('layouts.auth')
        ->name('register');
});

Route::livewire('password/reset', 'auth.passwords.email')
    ->layout('layouts.auth')
    ->name('password.request');

Route::livewire('password/reset/{token}', 'auth.passwords.reset')
    ->layout('layouts.auth')
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::livewire('email/verify', 'auth.verify')
        ->layout('layouts.auth')
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('email/verify/{id}/{hash}', 'Auth\EmailVerificationController')
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', 'Auth\LogoutController')
        ->name('logout');

    Route::livewire('password/confirm', 'auth.passwords.confirm')
        ->layout('layouts.auth')
        ->name('password.confirm');
});
