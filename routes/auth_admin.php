<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\PengumumanController;

Route::prefix('admin')->middleware('guest:admin')->group(function() {
    Route::get('register', [RegisterController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisterController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('admin.login'); // Rute admin.login didefinisikan di sini
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware('auth:admin')->group(function() {
    Route::get('dashboard', function() {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('pengumuman', [PengumumanController::class, 'index'])->name('admin.pengumuman');
    Route::get('pengumumans/create', [PengumumanController::class, 'create'])->name('admin.pengumumans.create');
    Route::post('pengumumans', [PengumumanController::class, 'store'])->name('admin.pengumumans.store');
    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});