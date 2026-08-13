<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WarisanBumi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WarisanBumiController extends Controller
{
    // Peta section -> label & nama route index
    protected array $sectionMap = [
        'geologi' => ['label' => 'Geologi', 'route' => 'admin.geologi.index'],
        'biologi' => ['label' => 'Biologi', 'route' => 'admin.biologi.index'],
        'budaya'  => ['label' => 'Hayati',  'route' => 'admin.hayati.index'],
    ];

    /* ===================== INDEX (beda halaman per section) ===================== */

    public function indexGeologi()
    {
        return $this->buildIndex('geologi');
    }

    public function indexBiologi()
    {
        return $this->buildIndex('biologi');
    }

    public function indexHayati()
    {
        return $this->buildIndex('budaya');
    }

    protected function buildIndex(string $section)
    {
        return view('admin.warisan-bumi.index', [
            'items'   => WarisanBumi::where('section', $section)->latest()->get(),
            'section' => $section,
            'title'   => $this->sectionMap[$section]['label'],
        ]);
    }

    /* ===================== CREATE / EDIT (1 halaman untuk semua section) ===================== */

    public function create(string $section)
    {
        $this->validateSection($section);

        return view('admin.warisan-bumi.form', [
            'item'    => new WarisanBumi(['section' => $section]),
            'section' => $section,
            'title'   => $this->sectionMap[$section]['label'],
        ]);
    }

    public function store(Request $request, string $section)
    {
        $this->validateSection($section);

        $data = $this->validateData($request);
        $data['section'] = $section;
        $data['slug'] = $this->generateSlug($data['nama']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('warisan-bumi', 'public');
        }

        WarisanBumi::create($data);

        flash()->success('Data ' . strtolower($this->sectionMap[$section]['label']) . ' berhasil ditambahkan.');

        return redirect()->route($this->sectionMap[$section]['route']);
    }

    public function edit(WarisanBumi $warisanBumi)
    {
        $this->validateSection($warisanBumi->section);

        return view('admin.warisan-bumi.form', [
            'item'    => $warisanBumi,
            'section' => $warisanBumi->section,
            'title'   => $this->sectionMap[$warisanBumi->section]['label'],
        ]);
    }

    public function update(Request $request, WarisanBumi $warisanBumi)
    {
        $data = $this->validateData($request);
        $data['slug'] = $this->generateSlug($data['nama'], $warisanBumi->id);

        if ($request->hasFile('image')) {
            if ($warisanBumi->image) {
                Storage::disk('public')->delete($warisanBumi->image);
            }
            $data['image'] = $request->file('image')->store('warisan-bumi', 'public');
        }

        $warisanBumi->update($data);

        flash()->success('Data ' . strtolower($this->sectionMap[$warisanBumi->section]['label']) . ' berhasil diperbarui.');

        return redirect()->route($this->sectionMap[$warisanBumi->section]['route']);
    }

    public function destroy(WarisanBumi $warisanBumi)
    {
        $route = $this->sectionMap[$warisanBumi->section]['route'];

        if ($warisanBumi->image) {
            Storage::disk('public')->delete($warisanBumi->image);
        }

        $warisanBumi->delete();

        flash()->success('Data ' . strtolower($this->sectionMap[$warisanBumi->section]['label']) . ' berhasil dihapus.');

        return redirect()->route($route);
    }

    /* ===================== HELPERS ===================== */

    protected function validateData(Request $request): array
    {
        return $request->validate([
            'nama'      => 'required|string|max:255',
            'jenis'     => 'nullable|string|max:255',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi'    => 'required|string',
            'kelurahan' => 'nullable|string|max:255',
            'kecamatan' => 'nullable|string|max:255',
            'kota'      => 'nullable|string|max:255',
            'x'         => 'nullable|numeric',
            'y'         => 'nullable|numeric',
            'deskripsi' => 'required|string',
        ]);
    }

    protected function generateSlug(string $nama, ?int $ignoreId = null): string
    {
        $slug = Str::slug($nama);
        $original = $slug;
        $i = 1;

        while (
            WarisanBumi::where('slug', $slug)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $original . '-' . $i++;
        }

        return $slug;
    }

    protected function validateSection(string $section): void
    {
        abort_unless(array_key_exists($section, $this->sectionMap), 404);
    }
}