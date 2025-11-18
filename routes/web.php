<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\PartnerController;


Route::get('/', [PartnerController::class, 'index'])->name('home');

Route::get('/about', [PartnerController::class, 'about'])->name('about');

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

    Route::get('/speaker', [SpeakerController::class, 'index'])->name('speaker');



Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
    return view('contact');
