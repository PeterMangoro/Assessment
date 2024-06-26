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
])->controller(DashboardController::class)->group(function () {
    Route::get('/dashboard',  'index')->name('dashboard');
    Route::put('/landing/{landing}',  'landingUpdate')->name('landing-page.update');
    Route::put('/story/{story}',  'storyUpdate')->name('story-page.update');
    Route::put('/service/{service}',  'serviceUpdate')->name('service-page.update');
    Route::put('/price/{price}',  'priceUpdate')->name('price-page.update');
    Route::put('/footer/{footer}',  'footerUpdate')->name('footer-page.update');

});

Route::put('/image/{image}', [ImageController::class, 'update'])->name('image.update');

