<?php

use App\Http\Controllers\Admin\GeologiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WarisanBumiController;
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
Route::get('/warisan-bumi', [WarisanBumiController::class, 'pageIndex'])->name('warisan-bumi');
Route::get('/warisan-bumi/geologi', [WarisanBumiController::class, 'geologi'])->name('warisan-bumi.geologi');
Route::get('/warisan-bumi/biologi', [WarisanBumiController::class, 'biologi'])->name('warisan-bumi.biologi');
Route::get('/warisan-bumi/budaya', [WarisanBumiController::class, 'budaya'])->name('warisan-bumi.budaya');

Route::get('/warisan-bumi-data', [WarisanBumiController::class, 'index'])->name('warisan-bumi.data.index');
Route::get('/warisan-bumi-data/{warisanBumi:slug}', [WarisanBumiController::class, 'show'])->name('warisan-bumi.data.show');

Route::get('/warisan-bumi/{section}/{slug}', [WarisanBumiController::class, 'detail'])->name('warisan-bumi.detail');

// Berita
Route::get('/berita', function () {
    return view('berita');
})->name('berita');

// Events
Route::get('/events', function () {
    return view('events');
})->name('events');

// Youth Forum
Route::get('/youth-forum', function () {
    return view('youth-forum');
})->name('youth-forum');

// Detail Informasi
Route::get('/detail', function () {
    return view('detail');
})->name('detail');

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

    // Admin Geologi Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('geologi', GeologiController::class);
    });
});

require __DIR__ . '/auth.php';
