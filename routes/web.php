<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');
