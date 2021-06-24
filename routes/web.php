<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing');

Auth::routes();
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');
