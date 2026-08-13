<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unduh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UnduhController extends Controller
{
    protected array $kategoriMap = [
        Unduh::KATEGORI_PUBLIKASI => [
            'label' => 'Publikasi',
            'route' => 'admin.publikasi.index',
        ],
        Unduh::KATEGORI_PERATURAN => [
            'label' => 'Peraturan',
            'route' => 'admin.peraturan.index',
        ],
    ];

    /* ===================== INDEX (beda halaman) ===================== */

    public function indexPublikasi()
    {
        return $this->buildIndex(Unduh::KATEGORI_PUBLIKASI);
    }

    public function indexPeraturan()
    {
        return $this->buildIndex(Unduh::KATEGORI_PERATURAN);
    }

    protected function buildIndex(string $kategori)
    {
        return view('admin.unduh.index', [
            'items' => Unduh::where('kategori', $kategori)->latest()->get(),
            'kategori' => $kategori,
            'title' => $this->kategoriMap[$kategori]['label'],
        ]);
    }

    /* ===================== CREATE / EDIT (1 halaman untuk keduanya) ===================== */

    public function create(string $kategori)
    {
        $this->validateKategori($kategori);

        return view('admin.unduh.form', [
            'item' => new Unduh(['kategori' => $kategori]),
            'kategori' => $kategori,
            'title' => $this->kategoriMap[$kategori]['label'],
            'kategoriRouteMap' => array_map(fn($v) => $v['route'], $this->kategoriMap),
        ]);
    }

    public function store(Request $request, string $kategori)
    {
        $this->validateKategori($kategori);

        $data = $this->validateData($request, true);
        $data['kategori'] = $kategori;
        $data['slug'] = $this->generateSlug($data['judul']);
        $data['status'] = $request->boolean('status');

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('unduh', 'public');
        }

        Unduh::create($data);

        flash()->success('Data ' . strtolower($this->kategoriMap[$kategori]['label']) . ' berhasil ditambahkan.');

        return redirect()->route($this->kategoriMap[$kategori]['route']);
    }

    public function edit(Unduh $unduh)
    {
        $this->validateKategori($unduh->kategori);

        return view('admin.unduh.form', [
            'item' => $unduh,
            'kategori' => $unduh->kategori,
            'title' => $this->kategoriMap[$unduh->kategori]['label'],
            'kategoriRouteMap' => array_map(fn($v) => $v['route'], $this->kategoriMap),
        ]);
    }

    public function update(Request $request, Unduh $unduh)
    {
        $data = $this->validateData($request, false);
        $data['status'] = $request->boolean('status');

        if ($data['judul'] !== $unduh->judul) {
            $data['slug'] = $this->generateSlug($data['judul'], $unduh->id);
        }

        if ($request->hasFile('file')) {
            if ($unduh->file) {
                Storage::disk('public')->delete($unduh->file);
            }
            $data['file'] = $request->file('file')->store('unduh', 'public');
        }

        $unduh->update($data);

        flash()->success('Data ' . strtolower($this->kategoriMap[$unduh->kategori]['label']) . ' berhasil diperbarui.');

        return redirect()->route($this->kategoriMap[$unduh->kategori]['route']);
    }

    public function destroy(Unduh $unduh)
    {
        $route = $this->kategoriMap[$unduh->kategori]['route'];

        if ($unduh->file) {
            Storage::disk('public')->delete($unduh->file);
        }

        $unduh->delete();

        flash()->success('Data ' . strtolower($this->kategoriMap[$unduh->kategori]['label']) . ' berhasil dihapus.');

        return redirect()->route($route);
    }

    /* ===================== HELPERS ===================== */

    protected function validateData(Request $request, bool $fileRequired): array
    {
        return $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:1000',
            'file' => ($fileRequired ? 'required' : 'nullable') . '|file|mimes:pdf,doc,docx,xls,xlsx|max:10240',
            'diterbitkan_pada' => 'nullable|date',
        ]);
    }

    protected function generateSlug(string $judul, ?int $ignoreId = null): string
    {
        $slug = Str::slug($judul);
        $original = $slug;
        $i = 1;

        while (Unduh::where('slug', $slug)->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = $original . '-' . $i++;
        }

        return $slug;
    }

    protected function validateKategori(string $kategori): void
    {
        abort_unless(array_key_exists($kategori, $this->kategoriMap), 404);
    }
}
