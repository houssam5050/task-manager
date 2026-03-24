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

Route::get('page', [UserController::class, 'page']);
Route::get('intro', [UserController::class, 'intro']);
Route::post('logout', [UserController::class, 'logout']);



//dashboad


Route::get('create', [DboardController::class, 'create']);
Route::post('store', [DboardController::class, 'store']);
