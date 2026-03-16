<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
   echo "Hello world";
});

Route::get('/about', function (){
    echo 'About us';
});

Route::get('/main/{value}', [MainController::class, 'index']);

