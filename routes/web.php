<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('cart', function () {    
    return view('cart');
})->name('cart');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Route::get('about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('products', function () {
    return view('products');
})->name('products');
