<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;

Route::get('/login',     [AuthController::class, 'showLogin']);
Route::post('/login',    [AuthController::class, 'login']);
Route::get('/register',  [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('checkauth')->group(function () {

    Route::get('/posts',[PostController::class, 'index']);
    Route::post('/posts',[PostController::class, 'store']);
    Route::get('/posts/{post}/edit',[PostController::class, 'edit']);

    Route::put('/posts/{post}',[PostController::class, 'update']);
    Route::delete('/posts/{post}',[PostController::class, 'destroy']);

    Route::post('/posts/{post}/like',[LikeController::class, 'toggle']);
});