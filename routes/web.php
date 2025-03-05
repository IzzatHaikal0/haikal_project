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

Route::get('/Profile', function () {
    return view('Profile.Patient.PatientProfile');

});

Route::get('/PregnancyTracker', function() {
    return view('PregnancyTracker.ViewTracker');
});

Route::get('/Appointment', function() {
    return view('Appointment.ViewAppointment');
});

Route::get('/test', function() {
    return view('test');
});