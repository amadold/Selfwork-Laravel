<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/about', [PublicController::class, 'about'])->name('about');

Route::get('/service/detail/{id}', [PublicController::class, 'detail'])->name('detail');

Route::get('/home', [PublicController::class, 'home'])->name('home');

Route::get('/service', [PublicController::class, 'service'])->name('service');
