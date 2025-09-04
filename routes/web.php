<?php

use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/', function () {
    return view('home');
});

// Halaman About
Route::get('/about', function () {
    return view('about');
});

// Halaman Contact
Route::get('/contact', function () {
    return view('contact');
});
