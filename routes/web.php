<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WahanaController;
use App\Http\Controllers\AdminAuthController;
use App\Models\wahana;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/informasi', function () {
    $wahanas = wahana::all();

    return view('wahana.informasi', compact('wahanas'));
})->name('wahana.informasi');

// Halaman login admin
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

// Proses login admin
Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.process');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

// Proses logout admin
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->middleware('auth')
    ->name('admin.logout');

// Halaman pengelolaan wahana hanya bisa dibuka setelah login
Route::resource('wahana', WahanaController::class)
    ->middleware('auth');

// Mengarahkan halaman login bawaan Laravel ke login admin
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

