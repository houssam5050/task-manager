<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::get('register', [UserController::class, 'create']);
Route::get('register', [UserController::class, 'store']);
Route::get('login', [UserController::class, 'login']);
Route::get('login', [UserController::class, 'showLogin']);
