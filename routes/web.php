<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

    Route::get('/speaker', [GalleryController::class, 'index'])->name('speaker');



Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
    return view('contact');
