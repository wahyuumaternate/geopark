<?php

namespace App\Http\Controllers;

use App\Models\Informasi;

class InformasiController extends Controller
{
    public function berita()
    {
        $items = Informasi::where('kategori', Informasi::KATEGORI_BERITA)->where('status', true)->whereNotNull('diterbitkan_pada')->orderByDesc('diterbitkan_pada')->get();

        return view('berita', compact('items'));
    }

    public function youthForum()
    {
        $items = Informasi::where('kategori', Informasi::KATEGORI_YOUTH_FORUM)->where('status', true)->whereNotNull('diterbitkan_pada')->orderByDesc('diterbitkan_pada')->get();

        return view('youth-forum', compact('items'));
    }

    public function show(Informasi $informasi)
    {
        abort_unless($informasi->status, 404);

        $backUrl = $informasi->kategori === Informasi::KATEGORI_BERITA ? route('berita') : route('youth-forum');

        $backLabel = $informasi->kategori === Informasi::KATEGORI_BERITA ? 'Berita' : 'Youth Forum';

        return view('informasi.detail', compact('informasi', 'backUrl', 'backLabel'));
    }
}
