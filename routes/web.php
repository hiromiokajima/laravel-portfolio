<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])
    ->name('index');

Route::group(['prefix' => 'index', 'as' => 'index.'], function () {
    Route::get('/about', [HomeController::class, 'about'])
        ->name('about');
    Route::get('/articles', [HomeController::class, 'articles'])
        ->name('articles');
    Route::get('/skill', [HomeController::class, 'skill'])
        ->name('skill');
    Route::get('/contact', [HomeController::class, 'contact'])
        ->name('contact');

});

