<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\WarisanBumi;

class HomeController extends Controller
{
    public function index()
    {
        $geosites = WarisanBumi::latest()->take(4)->get();

        $beritas = Informasi::where('kategori', Informasi::KATEGORI_BERITA)->where('status', true)->whereNotNull('diterbitkan_pada')->orderByDesc('diterbitkan_pada')->take(3)->get();

        return view('index', compact('geosites', 'beritas'));
    }
}
