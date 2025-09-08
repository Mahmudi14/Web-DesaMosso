<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
})->name('index');

Route::get('/profil-desa', function () {
    return view('landing.profil-desa');
})->name('profil-desa');

Route::get('/info', function () {
    return view('landing.info');
})->name('info');

Route::get('/galeri', function () {
    return view('landing.galeri');
})->name('galeri');