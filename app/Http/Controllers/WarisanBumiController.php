<?php

namespace App\Http\Controllers;

use App\Models\WarisanBumi;
use Illuminate\Http\Request;

class WarisanBumiController extends Controller
{
    // Peta section -> label yang dipakai di tampilan
    protected array $sectionLabels = [
        'geologi' => 'Warisan Geologi',
        'biologi' => 'Warisan Biologi',
        'budaya'  => 'Warisan Budaya',
    ];

    // Halaman utama Warisan Bumi (ringkasan semua section)
    public function pageIndex()
    {
        $geologis = WarisanBumi::where('section', 'geologi')->latest()->take(3)->get();
        $biologis = WarisanBumi::where('section', 'biologi')->latest()->take(3)->get();
        $budayas  = WarisanBumi::where('section', 'budaya')->latest()->take(3)->get();

        return view('warisan-bumi.index', compact('geologis', 'biologis', 'budayas'));
    }

    public function geologi()
    {
        $items = WarisanBumi::where('section', 'geologi')->latest()->get();

        return view('warisan-bumi.geologi', [
            'items'   => $items,
            'section' => 'geologi',
        ]);
    }

    public function biologi()
    {
        $items = WarisanBumi::where('section', 'biologi')->latest()->get();

        return view('warisan-bumi.biologi', [
            'items'   => $items,
            'section' => 'biologi',
        ]);
    }

    public function budaya()
    {
        $items = WarisanBumi::where('section', 'budaya')->latest()->get();

        return view('warisan-bumi.budaya', [
            'items'   => $items,
            'section' => 'budaya',
        ]);
    }

    // Daftar semua data (dipakai route /warisan-bumi-data)
    public function index()
    {
        $items = WarisanBumi::latest()->get();

        return view('warisan-bumi.data-index', compact('items'));
    }

    public function show(WarisanBumi $warisanBumi)
    {
        return view('warisan-bumi.data-show', [
            'item'         => $warisanBumi,
            'sectionLabel' => $this->sectionLabels[$warisanBumi->section] ?? 'Warisan Bumi',
        ]);
    }

    // Detail via {section}/{slug} — dipakai kartu Geosite di beranda & listing
    public function detail(string $section, string $slug)
    {
        abort_unless(array_key_exists($section, $this->sectionLabels), 404);

        $item = WarisanBumi::where('section', $section)
            ->where('slug', $slug)
            ->firstOrFail();

        return view('warisan-bumi.detail', [
            'item'         => $item,
            'section'      => $section,
            'sectionLabel' => $this->sectionLabels[$section],
        ]);
    }
}