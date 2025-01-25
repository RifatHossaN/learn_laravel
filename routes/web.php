<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//register routers

Route::get('/register',function(){
    return view('auth.register');
})->name('register');

Route::post('/register',[authController::class, 'register']);


//login routes

Route::get('/login',function(){
    return view('auth.login');
})->name('login');

Route::post('/login',[authController::class, 'login']);
