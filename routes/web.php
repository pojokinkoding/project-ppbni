<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;



Route::get('/', fn() => redirect()->route('login'));
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('members', MemberController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
