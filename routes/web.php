<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register/success', [RegisterController::class, 'store'])->name('register.store');
Route::get('/register/success', [RegisterController::class, 'show'])->name('register.show');