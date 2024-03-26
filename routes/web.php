<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

// Home
Route::get('home', [HomeController::class, 'index'])->name('home');

//Profile
Route::get('profile', ProfileController::class)->name('profile');

//employe List
Route::resource('employees', EmployeeController::class);
