<?php

use Illuminate\Support\Facades\Route;

Route::get('/main/{value}', function ($value) {
    return view('main', ['value' => $value]);
});
