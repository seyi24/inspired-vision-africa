<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/speaker', function () {
    return view('speaker');
});
Route::get('/contact', function () {
    return view('contact');
});