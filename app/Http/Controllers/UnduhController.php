<?php

namespace App\Http\Controllers;

use App\Models\Unduh;

class UnduhController extends Controller
{
    public function publikasi()
    {
        $items = Unduh::where('kategori', Unduh::KATEGORI_PUBLIKASI)
            ->where('status', true)
            ->orderByDesc('diterbitkan_pada')
            ->paginate(10);

        return view('unduh.publikasi', compact('items'));
    }

    public function peraturan()
    {
        $items = Unduh::where('kategori', Unduh::KATEGORI_PERATURAN)
            ->where('status', true)
            ->orderByDesc('diterbitkan_pada')
            ->paginate(10);

        return view('unduh.peraturan', compact('items'));
    }
}