<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('pasien/confirmation', function() {
        return view('pasien.confirmation');
    })->name('pasien.confirmation');
    Route::get('pasien/create', [BookingController::class, 'create'])->name('pasien.create');
    Route::post('pasiens', [BookingController::class, 'store'])->name('pasien.store');
});

require __DIR__.'/auth.php';
require __DIR__.'/auth_admin.php';
