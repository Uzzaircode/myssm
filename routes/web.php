<?php

Route::get('/', function () {
    return view('home');
});

Route::get('cart', function () {
    return view('cart');
});

Route::get('profile', function () {
    return view('profile');
});
