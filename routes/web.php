<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardController;

Route::get('login', [authController::class, 'login']);
Route::post('login', [authController::class, 'auth_login']);
Route::get('bidan/dashboard', [dashboardController::class, 'dashboard']);
Route::get('pasien', [PasienController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});