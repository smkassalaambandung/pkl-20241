<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function(){
    Route::resource('user', UserController::class);
});

Route::get('/', function () {
    return view('layouts.backend');
})->middleware('auth');

Route::get('data', function () {
    return view('data')->name('data');
});

Auth::routes(
    ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
