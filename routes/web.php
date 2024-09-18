<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::controller(HomeController::class)->group(function(){
        Route::get('/', 'index')->name('home.index');
    });

    Route::controller(LoginController::class)->group(function(){
        Route::get('/logout', 'logout')->name('login.logout');
    });
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'create')->name('login.create');
    Route::post('/login', 'login')->name('login.login');
});
