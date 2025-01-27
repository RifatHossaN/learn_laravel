<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('posts');
// })->name('posts');

//redirecting the home/post page
Route::redirect('/','post')->name('post');

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


//LogOut Route

Route::post('/logout',[authController::class, 'logout'])->name('logout');


//Dashboard

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard'); 


//post routes 

Route::resource('post',PostController::class);

Route::get('/{user}/posts',[dashboardController::class, 'userPosts'])->name('user.posts');