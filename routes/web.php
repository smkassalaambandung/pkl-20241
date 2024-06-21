<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.backend');
});
Route::get('data', function () {
    return view('data');
});
Auth::routes(
    ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
