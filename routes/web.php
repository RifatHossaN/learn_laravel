<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register',function(){
    return view('auth.register');
})->name('register');

Route::post('/register',[authController::class, 'register']);
