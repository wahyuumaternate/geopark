<?php

use App\Http\Controllers\Admin\UnduhController;
use App\Http\Controllers\UnduhController as PublicUnduhController;
use App\Http\Controllers\Admin\WarisanBumiController as AdminWarisanBumiController;
use App\Http\Controllers\Admin\InformasiController;
use App\Http\Controllers\InformasiController as PublicInformasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WarisanBumiController;
use Illuminate\Support\Facades\Route;

// Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');
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

Route::get('/warisan-bumi/geologi/peta', [WarisanBumiController::class, 'petaGeologi'])->name('warisanbumi.geologi.peta');
Route::get('/warisan-bumi/biologi/peta', [WarisanBumiController::class, 'petaBiologi'])->name('warisanbumi.biologi.peta');
Route::get('/warisan-bumi/budaya/peta', [WarisanBumiController::class, 'petaBudaya'])->name('warisanbumi.budaya.peta');

// tetap di bawah:
Route::get('/warisan-bumi/{section}/{slug}', [WarisanBumiController::class, 'detail'])->name('warisanbumi.detail');

// Informasi
// Berita
Route::get('/berita', [PublicInformasiController::class, 'berita'])->name('berita');

// Youth Forum
Route::get('/youth-forum', [PublicInformasiController::class, 'youthForum'])->name('youth-forum');

// Detail Berita/Youth Forum (satu route dipakai keduanya, dibedakan dari data kategori-nya)
Route::get('/informasi/{informasi:slug}', [PublicInformasiController::class, 'show'])->name('informasi.show');

// Unduh
Route::get('/unduh/publikasi', [PublicUnduhController::class, 'publikasi'])->name('unduh.publikasi');
Route::get('/unduh/peraturan', [PublicUnduhController::class, 'peraturan'])->name('unduh.peraturan');

// COE
Route::get('/coe', function () {
    return view('coe');
})->name('coe');

// Mitra Geopark
Route::get('/mitra-geopark', function () {
    return view('mitra-geopark');
})->name('mitra-geopark');

// Berita dan Informasi (Hubungi Kami — nama route ini sepertinya salah copy, cek lagi)
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

    // ==================== ADMIN ====================
    Route::prefix('admin')
        ->name('admin.')
        ->group(function () {
            // Geologi
            // Warisan Bumi: Geologi, Biologi, Hayati
            Route::get('geologi', [AdminWarisanBumiController::class, 'indexGeologi'])->name('geologi.index');
            Route::get('biologi', [AdminWarisanBumiController::class, 'indexBiologi'])->name('biologi.index');
            Route::get('hayati', [AdminWarisanBumiController::class, 'indexHayati'])->name('hayati.index');

            // Create/Edit — 1 halaman untuk ketiga section
            Route::get('warisan-bumi/create/{section}', [AdminWarisanBumiController::class, 'create'])
                ->whereIn('section', ['geologi', 'biologi', 'budaya'])
                ->name('warisanbumi.create');

            Route::post('warisan-bumi/{section}', [AdminWarisanBumiController::class, 'store'])
                ->whereIn('section', ['geologi', 'biologi', 'budaya'])
                ->name('warisanbumi.store');

            Route::get('warisan-bumi/{warisanBumi}/edit', [AdminWarisanBumiController::class, 'edit'])->name('warisanbumi.edit');

            Route::put('warisan-bumi/{warisanBumi}', [AdminWarisanBumiController::class, 'update'])->name('warisanbumi.update');

            Route::delete('warisan-bumi/{warisanBumi}', [AdminWarisanBumiController::class, 'destroy'])->name('warisanbumi.destroy');

            // Informasi: Berita & Youth Forum
            // Index — beda halaman untuk masing-masing kategori
            Route::get('berita', [InformasiController::class, 'indexBerita'])->name('berita.index');
            Route::get('youth-forum', [InformasiController::class, 'indexYouthForum'])->name('youthforum.index');

            // Create/Edit — 1 halaman dipakai untuk kedua kategori
            Route::get('informasi/create/{kategori}', [InformasiController::class, 'create'])
                ->whereIn('kategori', ['berita', 'youth-forum'])
                ->name('informasi.create');

            Route::post('informasi/{kategori}', [InformasiController::class, 'store'])
                ->whereIn('kategori', ['berita', 'youth-forum'])
                ->name('informasi.store');

            Route::get('informasi/{informasi}/edit', [InformasiController::class, 'edit'])->name('informasi.edit');

            Route::put('informasi/{informasi}', [InformasiController::class, 'update'])->name('informasi.update');

            Route::delete('informasi/{informasi}', [InformasiController::class, 'destroy'])->name('informasi.destroy');

            Route::get('publikasi', [UnduhController::class, 'indexPublikasi'])->name('publikasi.index');
            Route::get('peraturan', [UnduhController::class, 'indexPeraturan'])->name('peraturan.index');

            Route::get('unduh/create/{kategori}', [UnduhController::class, 'create'])
                ->whereIn('kategori', ['publikasi', 'peraturan'])
                ->name('unduh.create');

            Route::post('unduh/{kategori}', [UnduhController::class, 'store'])
                ->whereIn('kategori', ['publikasi', 'peraturan'])
                ->name('unduh.store');

            Route::get('unduh/{unduh}/edit', [UnduhController::class, 'edit'])->name('unduh.edit');
            Route::put('unduh/{unduh}', [UnduhController::class, 'update'])->name('unduh.update');
            Route::delete('unduh/{unduh}', [UnduhController::class, 'destroy'])->name('unduh.destroy');
        });
});

require __DIR__ . '/auth.php';
