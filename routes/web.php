<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    echo "Hello World!";
});

Route::get('/about', function (){
    echo 'About us';
});

Route::get('/main/{value}', function ($value) {
    return view('main', ['value' => $value]);
});

Route::get('/main/{value}', [MainController::class, 'index']);
Route::get('/page2/{value}', [MainController::class, 'page2']);
Route::get('/page3/{value}', [MainController::class, 'page3']);





