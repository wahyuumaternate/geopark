<?php

namespace App\Http\Controllers;

use App\Models\WarisanBumi;
use App\Support\GeoparkData;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class WarisanBumiController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $section = $request->query('section');

        $query = WarisanBumi::query();

        if ($section) {
            $query->where('section', $section);
        }

        return response()->json($query->get());
    }

    public function show(WarisanBumi $warisanBumi): JsonResponse
    {
        return response()->json($warisanBumi);
    }

    public function pageIndex()
    {
        return view('warisan-bumi.index');
    }

    public function geologi()
    {
        return view('warisan-bumi.geologi');
    }

    public function biologi()
    {
        return view('warisan-bumi.biologi');
    }

    public function budaya()
    {
        return view('warisan-bumi.budaya');
    }

    public function detail(string $section, string $slug)
    {
        $item = GeoparkData::item($section, $slug);

        if (! $item) {
            abort(404);
        }

        $sectionLabels = [
            'geologi' => 'Warisan Geologi',
            'biologi' => 'Warisan Biologi',
            'budaya' => 'Warisan Budaya',
        ];

        return view('warisan-bumi.detail', [
            'section' => $section,
            'sectionLabel' => $sectionLabels[$section] ?? ucfirst($section),
            'item' => $item,
        ]);
    }
}
