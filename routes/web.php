<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/alokasi', function(){
    return view('alokasi');
});
