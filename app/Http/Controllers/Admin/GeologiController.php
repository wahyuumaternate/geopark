<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WarisanBumi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GeologiController extends Controller
{
    public function index()
    {
        $items = WarisanBumi::where('section', 'geologi')->latest()->get();

        return view('admin.geologi.index', compact('items'));
    }

    public function create()
    {
        return view('admin.geologi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi' => 'required|string',
            'kelurahan' => 'nullable|string|max:255',
            'kecamatan' => 'nullable|string|max:255',
            'kota' => 'nullable|string|max:255',
            'x' => 'nullable|string|max:255',
            'y' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $validated['section'] = 'geologi';
        $validated['slug'] = Str::slug($validated['nama']);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('geologi', 'public');
        }

        WarisanBumi::create($validated);

        flash()->success('Data geologi berhasil ditambahkan.');

        return redirect()->route('admin.geologi.index');
    }

    public function edit(WarisanBumi $geologi)
    {
        return view('admin.geologi.edit', compact('geologi'));
    }

    public function update(Request $request, WarisanBumi $geologi)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi' => 'required|string',
            'kelurahan' => 'nullable|string|max:255',
            'kecamatan' => 'nullable|string|max:255',
            'kota' => 'nullable|string|max:255',
            'x' => 'nullable|string|max:255',
            'y' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $validated['slug'] = Str::slug($validated['nama']);

        if ($request->hasFile('image')) {
            if ($geologi->image) {
                Storage::disk('public')->delete($geologi->image);
            }

            $validated['image'] = $request->file('image')->store('geologi', 'public');
        }

        $geologi->update($validated);

        flash()->success('Data geologi berhasil diperbarui.');

        return redirect()->route('admin.geologi.index');
    }

    public function destroy(WarisanBumi $geologi)
    {
        if ($geologi->image) {
            Storage::disk('public')->delete($geologi->image);
        }

        $geologi->delete();

        flash()->success('Data geologi berhasil dihapus.');

        return redirect()->route('admin.geologi.index');
    }
}
