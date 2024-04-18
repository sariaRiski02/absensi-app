<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthSocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\OprationsAbsen;
use App\Http\Controllers\OprationsAbsenController;
use App\Http\Controllers\ParticipantController;
use App\Http\Middleware\indexMiddleware;
use App\Livewire\ListMember;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/isi-absen', [AbsenController::class, 'fillAbsen'])->name('absen.fill');
Route::post('/submit-absen', [AbsenController::class, 'store'])->name('absen.store');
Route::get('/list-anggota/{id}', [ParticipantController::class, 'index'])->name('participant.index')->middleware('auth')->middleware(indexMiddleware::class);
Route::get('/tentang', function () {
    return view('about');
});
Route::get('/kontak', function () {
    return view('contact');
});
Route::get('/download/{id}', [DownloadController::class, 'download'])->name('absen.download')->middleware('auth');

Route::post('/buat-absen', [OprationsAbsenController::class, 'store']);



Route::get('/auth/google/redirect', [AuthSocialiteController::class, 'authRedirect']);
Route::get('/auth/google/callback', [AuthSocialiteController::class, 'authCallback']);


require __DIR__ . '/auth.php';
