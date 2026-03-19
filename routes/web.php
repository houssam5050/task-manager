<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('register', [UserController::class, 'create']);
Route::post('register', [UserController::class, 'store']);

Route::get('login', [UserController::class, 'showLogin']);
Route::post('login', [UserController::class, 'login']);

Route::get('page', [UserController::class, 'page']);
Route::post('logout', [UserController::class, 'logout']);