<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthSocialiteController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/buat-absen', [AbsenController::class, 'index'])->name('absen.index')->middleware('auth');
Route::get('/isi-absen', [AbsenController::class, 'fillAbsen'])->name('absen.fill');
Route::get('/list-anggota', [MemberController::class, 'index'])->name('member.index')->middleware('auth');
Route::get('/tentang', function () {
    return view('about');
});
Route::get('/kontak', function () {
    return view('contact');
});


Route::post('/buat-absen', [AbsenController::class, 'store']);



Route::get('/auth/google/redirect', [AuthSocialiteController::class, 'authRedirect']);
Route::get('/auth/google/callback', [AuthSocialiteController::class, 'authCallback']);


require __DIR__ . '/auth.php';
