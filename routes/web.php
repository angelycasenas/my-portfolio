<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/certificates', function () {
    return view('certificates');
})->name('certificates');