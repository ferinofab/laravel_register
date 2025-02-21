<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('main', [RegisterController::class, 'main'])->name('register.main');
Route::post('store', [RegisterController::class, 'store'])->name('register.store');
Route::get('sign_in/{registered}', [RegisterController::class, 'login'])->name('register.login');
Route::post('sign_in/handler', [RegisterController::class, 'signin'])->name('register.handler');


Route::get('blog', [RegisterController::class, 'blog'])->name('register.blog');
