<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn() => redirect()->route('login'));
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
