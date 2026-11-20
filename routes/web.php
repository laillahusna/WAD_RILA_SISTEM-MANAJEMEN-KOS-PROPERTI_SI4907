<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes-koneksi', function () {
    try {
        DB::connection()->getPdo();
            return "DB berhasil connect!";
        } catch (\Exception $e) {
            return "DB gagal connect: ". $e->getMessage();
        }
})->withoutMiddleware('web');


use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\AuthController;


Route::get('/', fn () => redirect()->route('penghuni.index'));

// Login & logout
Route::get('/login', [AuthController::class, 'formLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.proses');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman penghuni hanya bisa dibuka kalau sudah login
Route::resource('penghuni', PenghuniController::class)->middleware('auth');

