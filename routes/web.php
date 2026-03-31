<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DboardController;

//users

Route::get('/', [UserController::class, 'index']);

Route::get('register', [UserController::class, 'create']);
Route::post('register', [UserController::class, 'store']);

Route::get('login', [UserController::class, 'showLogin']);
Route::post('login', [UserController::class, 'login']);


Route::get('intro', [UserController::class, 'intro']);
Route::post('logout', [UserController::class, 'logout']);



//dashboad

Route::get('/dashboard', [DboardController::class, 'dashboard']);
Route::get('/create', [DboardController::class, 'create']);
Route::post('/store', [DboardController::class, 'store']);
Route::get('/edit/{id}', [DboardController::class, 'edit']);
Route::post('/update/{id}', [DboardController::class, 'update']);
Route::get('/delete/{id}', [DboardController::class, 'delete']);
Route::get('/missions', [DboardController::class, 'missions']);
Route::get('/profile', [UserController::class, 'profile']);


