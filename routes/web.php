<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiniController;
use App\Http\Controllers\ContactController;



Route::get('/about', [MiniController::class, 'about']);



Route::get('/contact', [MiniController::class, 'contact']);



Route::get('/', function() {
    return redirect()->route('contacts.index');
});

Route::get('/', function() {
    return redirect()->route('contacts.create');
});


Route::resource('contacts', ContactController::class);

