<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Site
Route::get('/', [SiteController::class, 'index'])->name('site.index');

// Login (somente visitantes)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('site.login');
    Route::post('/login', [LoginController::class, 'authenticate'])
        ->middleware('throttle:5,1')
        ->name('auth.login');
});

//Auth
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');});

// Logout (somente autenticados)
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('auth.logout');

