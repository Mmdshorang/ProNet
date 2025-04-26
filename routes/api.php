<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::get('/users', [UserController::class, 'index']); // برای نمایش لیست کاربران
Route::post('/users', [UserController::class, 'store']); // برای ایجاد کاربر جدید
Route::get('/users/{user}', [UserController::class, 'show']); // برای نمایش کاربر خاص
Route::put('/users/{user}', [UserController::class, 'update']); // برای به‌روزرسانی کاربر
Route::delete('/users/{user}', [UserController::class, 'destroy']); // برای حذف کاربر
