<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('Login.Login');

});


//buat switch case to check user role
Route::get('/sidebar', function () {
    return view('sidebar.patient');

});