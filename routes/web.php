<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Socialite;

Route::view('/', 'landing');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
// Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
Route::get('auth/google/callback', [GoogleController::class,'handleGoogleCallback']);
Route::get('auth/google', [GoogleController::class,'redirectToGoogle']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
