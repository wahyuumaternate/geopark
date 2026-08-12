<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pengelola', function () {
    return view('pengelola');
});

// Beranda
Route::get('/', function () {
    return view('index');
})->name('home');

// Tentang Kami
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');

// Badan Pengelola
Route::get('/pengelola', function () {
    return view('pengelola');
})->name('pengelola');

// Warisan Bumi
Route::get('/warisan-bumi', function () {
    return view('warisan-bumi.geologi');
})->name('warisan-bumi');

Route::get('/warisan-bumi/biologi', function () {
    return view('warisan-bumi.biologi');
})->name('warisan-bumi.biologi');

Route::get('/warisan-bumi/budaya', function () {
    return view('warisan-bumi.budaya');
})->name('warisan-bumi.budaya');

// Berita / Events / Youth Forum (satu halaman yang sama)
Route::get('/youth-forum', function () {
    return view('youth-forum');
})->name('youth-forum');

// Unduh
Route::get('/unduh', function () {
    return view('unduh.index');
})->name('unduh');

Route::get('/unduh/publikasi', function () {
    return view('unduh.publikasi');
})->name('unduh.publikasi');

Route::get('/unduh/peraturan', function () {
    return view('unduh.peraturan');
})->name('unduh.peraturan');

// COE
Route::get('/coe', function () {
    return view('coe');
})->name('coe');

// Mitra Geopark
Route::get('/mitra-geopark', function () {
    return view('mitra-geopark');
})->name('mitra-geopark');

// Hubungi Kami
Route::get('/berita-dan-informasi', function () {
    return view('berita-dan-informasi');
})->name('berita-dan-informasi');

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
