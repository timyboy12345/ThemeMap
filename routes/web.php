<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::prefix('e')->group(function () {
        Route::view('checkout', 'examples/checkout');
        Route::view('album', 'examples/album');
        Route::view('pricing', 'examples/pricing');
        Route::view('carousel', 'examples/carousel');
    });
});
