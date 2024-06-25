<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'index'])->name('home');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('/landing/{landing}', [DashboardController::class, 'landingUpdate'])->name('landing-page.update');

});

Route::put('/image/{image}', [ImageController::class, 'update'])->name('image.update');

