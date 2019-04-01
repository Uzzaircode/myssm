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

Route::get('business-profile', function () {
    return view('products');
})->name('business-profile');

Route::get('historical-financial', function () {
    return view('historical-financial');
})->name('historical-financial');

Route::get('document-image', function () {
    return view('document-image');
})->name('document-image');

Route::get('company-watch', function () {
    return view('company-watch');
})->name('company-watch');

Route::get('company-charges', function () {
    return view('company-charges');
})->name('company-charges');

Route::get('login', function () {
    return view('login');
})->name('login');


Route::get('register', function () {
    return view('register');
})->name('register');