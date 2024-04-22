<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\indexMiddleware;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\AuthSocialiteController;
use App\Http\Controllers\fillAttandanceController;



// route for google auth
Route::get('/auth/google/redirect', [AuthSocialiteController::class, 'authRedirect']);
Route::get('/auth/google/callback', [AuthSocialiteController::class, 'authCallback']);


// profile 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// landing page
Route::get('/', function () {
    return view('landing');
})->name('landing');

// about page
Route::get('/tentang', function () {
    return view('about');
});

//  contact page
Route::get('/kontak', function () {
    return view('contact');
});

// Dashoard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Routes fill attendance  || halaman dan rute mengisi kehadiran
Route::get('/isi-absen', [fillAttandanceController::class, 'attandance'])->name('absen.fill');
Route::post('/isi-absen', [fillAttandanceController::class, 'storeAttandance'])->name('absen.store');


// Routes for participant || halaman dan rute untuk anggota
Route::get('/list-anggota/{slug}', [ParticipantController::class, 'index'])->name('participant.index')->middleware('auth')->middleware(indexMiddleware::class);
Route::post('/tambah-anggota/{slug}', [ParticipantController::class, 'addParticipant'])->name('participant.add')->middleware('auth');

// Route for add absen & delete participant // rute untuk menambahkan absen & menghapus peserta
Route::post('/buat-absen/{id}', [AbsenController::class, 'create'])->name('absen.create')->middleware('auth');
Route::get('/hapus/{id}', [AbsenController::class, 'destroy'])->name('absen.destroy')->middleware('auth');


Route::post('/buat-kelas', [GroupController::class, 'store'])->name('group.store')->middleware('auth');


Route::get('/download/{id}', [DownloadController::class, 'download'])->name('absen.download')->middleware('auth');

// make rerdirect if not found route

Route::fallback(function () {
    return redirect()->route('landing');
});

require __DIR__ . '/auth.php';
