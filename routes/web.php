<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

// ---------- Login / Logout ----------
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.proses')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// halaman awal -> daftar staff (kalau belum login, otomatis diarahkan ke login oleh middleware auth)
Route::redirect('/', '/staff');

// ---------- Semua halaman modul wajib login (guest dialihkan ke login) ----------
Route::middleware('auth')->group(function () {

    // admin + staff: lihat, tambah, ubah
    Route::resource('staff', StaffController::class)
        ->only(['index', 'store', 'edit', 'update'])
        ->parameters(['staff' => 'staff']);

    // halaman jadwal staff
    Route::view('/jadwal-staff', 'jadwal')->name('jadwal');

    // hapus: HANYA admin
    Route::delete('/staff/{staff}', [StaffController::class, 'destroy'])
        ->name('staff.destroy')
        ->middleware('role:admin');
});
