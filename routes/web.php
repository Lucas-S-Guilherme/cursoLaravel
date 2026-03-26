<?php

use App\Http\Middleware\CheckIsLogged;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

// Auth routes
Route::get('/login', [AuthController::class, 'login']);
Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);

Route::middleware([CheckIsLogged::class])->group(function(){
    Route::get('/', [MainController::class, 'index']);
    Route::get('/newNote', [MainController::class, 'newNote']);
    Route::get('/logout', [AuthController::class, 'logout']);
});








