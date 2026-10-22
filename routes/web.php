<?php

use Illuminate\Support\Facades\Route;

//Site
Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('home');

//LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');