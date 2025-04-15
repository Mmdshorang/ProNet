<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;

Route::get('/users', [UserController::class, 'index']);
Route::post('/users/create', [UserController::class, 'store']);
Route::post('/users/show', [UserController::class, 'show']);
Route::post('/users/update', [UserController::class, 'update']);
Route::post('/users/destroy', [UserController::class, 'destroy']);