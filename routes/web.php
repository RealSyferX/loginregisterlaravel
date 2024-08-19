<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/login', [UserController::class, 'index']);
Route::post('/login/done', [UserController::class, 'yeslogin']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/users', [UserController::class, 'createUser']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

