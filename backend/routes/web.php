<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('item.home');
});

Route::get('/lost', function () {
    return view('item.recent');
});

Route::get('/found-property', function () {
    return view('item.found');
});

Route::get('/lost-property', function () {
    return view('item.lost');
});