<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::resource('posts', PostController::class);

Route::get('/', function () {
    return view('/home.index', [
        "title"=> "Home"
    ]);
});

#Login
Route::get('/login', [LoginController::class, 'index']) -> middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

#Logout
Route::post('logout',[LoginController::class,'logout']);

#Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);