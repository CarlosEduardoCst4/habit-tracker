<?php

use Illuminate\Support\Facades\Route;

//Site
Route::get('/', [SiteController::class, 'index'])->name('home');

//LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');