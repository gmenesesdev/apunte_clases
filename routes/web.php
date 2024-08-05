<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});
