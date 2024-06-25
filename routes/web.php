<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    Route::get('data1000', function () {
        return view('data');
    })->name('data');
    Route::get('data200', function () {
        return view('data');
    })->name('data2');
    Route::get('old', function () {
        return view('data');
    })->name('old');
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
