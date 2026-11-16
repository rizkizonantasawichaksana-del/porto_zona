<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/karya', 'pages.work')->name('work');
Route::view('/tentang', 'pages.about')->name('about');
Route::view('/kontak', 'pages.contact')->name('contact');
Route::view('/jelajahi', 'pages.explore')->name('explore');
Route::view('/sertifikat', 'pages.certificates')->name('certificates');
