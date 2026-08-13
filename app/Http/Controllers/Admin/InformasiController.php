<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InformasiController extends Controller
{
    // Peta kategori -> label & route index, biar mudah dikembangkan
    protected array $kategoriMap = [
        Informasi::KATEGORI_BERITA => [
            'label' => 'Berita',
            'route' => 'admin.berita.index',
        ],
        Informasi::KATEGORI_YOUTH_FORUM => [
            'label' => 'Youth Forum',
            'route' => 'admin.youthforum.index',
        ],
    ];

    /* ===================== INDEX (beda halaman) ===================== */

    public function indexBerita()
    {
        return view('admin.informasi.index', [
            'items' => Informasi::where('kategori', Informasi::KATEGORI_BERITA)->latest()->get(),
            'kategori' => Informasi::KATEGORI_BERITA,
            'title' => 'Berita',
        ]);
    }

    public function indexYouthForum()
    {
        return view('admin.informasi.index', [
            'items' => Informasi::where('kategori', Informasi::KATEGORI_YOUTH_FORUM)->latest()->get(),
            'kategori' => Informasi::KATEGORI_YOUTH_FORUM,
            'title' => 'Youth Forum',
        ]);
    }

    /* ===================== CREATE / EDIT (1 halaman untuk keduanya) ===================== */

    public function create(string $kategori)
    {
        $this->validateKategori($kategori);

        return view('admin.informasi.form', [
            'item' => new Informasi(['kategori' => $kategori]),
            'kategori' => $kategori,
            'title' => $this->kategoriMap[$kategori]['label'],
        ]);
    }
    public function store(Request $request, string $kategori)
    {
        $this->validateKategori($kategori);

        $data = $this->validateData($request);
        $data['kategori'] = $kategori;
        $data['slug'] = $this->generateSlug($data['judul']);
        $data['status'] = $request->boolean('status');

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('informasi', 'public');
        }

        Informasi::create($data);

        flash()->success('Data ' . strtolower($this->kategoriMap[$kategori]['label']) . ' berhasil ditambahkan.');

        return redirect()->route($this->kategoriMap[$kategori]['route']);
    }

    public function edit(Informasi $informasi)
    {
        $this->validateKategori($informasi->kategori);

        return view('admin.informasi.form', [
            'item' => $informasi,
            'kategori' => $informasi->kategori,
            'title' => $this->kategoriMap[$informasi->kategori]['label'],
        ]);
    }

    public function update(Request $request, Informasi $informasi)
    {
        $data = $this->validateData($request);
        $data['status'] = $request->boolean('status');

        if ($data['judul'] !== $informasi->judul) {
            $data['slug'] = $this->generateSlug($data['judul'], $informasi->id);
        }

        if ($request->hasFile('gambar')) {
            if ($informasi->gambar) {
                Storage::disk('public')->delete($informasi->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('informasi', 'public');
        }

        $informasi->update($data);

        flash()->success('Data ' . strtolower($this->kategoriMap[$informasi->kategori]['label']) . ' berhasil diperbarui.');

        return redirect()->route($this->kategoriMap[$informasi->kategori]['route']);
    }

    public function destroy(Informasi $informasi)
    {
        $route = $this->kategoriMap[$informasi->kategori]['route'];

        if ($informasi->gambar) {
            Storage::disk('public')->delete($informasi->gambar);
        }

        $informasi->delete();

        flash()->success('Data ' . strtolower($this->kategoriMap[$informasi->kategori]['label']) . ' berhasil dihapus.');

        return redirect()->route($route);
    }

    /* ===================== HELPERS ===================== */

    protected function validateData(Request $request): array
    {
        return $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'nullable|string|max:500',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
            'diterbitkan_pada' => 'nullable|date',
        ]);
    }

    protected function generateSlug(string $judul, ?int $ignoreId = null): string
    {
        $slug = Str::slug($judul);
        $original = $slug;
        $i = 1;

        while (Informasi::where('slug', $slug)->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = $original . '-' . $i++;
        }

        return $slug;
    }

    protected function validateKategori(string $kategori): void
    {
        abort_unless(array_key_exists($kategori, $this->kategoriMap), 404);
    }
}
