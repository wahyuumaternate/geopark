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

    public function indexYouthForum(Request $request)
    {
        $query = Informasi::where('kategori', Informasi::KATEGORI_YOUTH_FORUM);

        // Role 'youth_forum' hanya melihat data yang dia input sendiri.
        // Role lain (mis. admin) tetap melihat semua data youth forum.
        if ($request->user()->role === 'youth_forum') {
            $query->where('user_id', $request->user()->id);
        }

        return view('admin.informasi.index', [
            'items' => $query->latest()->get(),
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

        $data = $this->validateData($request, isUpdate: false);
        $data['kategori'] = $kategori;
        $data['user_id'] = $request->user()->id;
        $data['slug'] = $this->generateSlug($data['judul']);
        $data['status'] = $request->boolean('status');

        // Gambar wajib saat membuat data baru.
        $data['gambar'] = $request->file('gambar')->store('informasi', 'public');

        Informasi::create($data);

        flash()->success('Data ' . strtolower($this->kategoriMap[$kategori]['label']) . ' berhasil ditambahkan.');

        return redirect()->route($this->kategoriMap[$kategori]['route']);
    }

    public function edit(Request $request, Informasi $informasi)
    {
        $this->validateKategori($informasi->kategori);
        $this->authorizeOwnership($request, $informasi);

        return view('admin.informasi.form', [
            'item' => $informasi,
            'kategori' => $informasi->kategori,
            'title' => $this->kategoriMap[$informasi->kategori]['label'],
        ]);
    }

    public function update(Request $request, Informasi $informasi)
    {
        $this->authorizeOwnership($request, $informasi);

        $data = $this->validateData($request, isUpdate: true);
        $data['status'] = $request->boolean('status');

        if ($data['judul'] !== $informasi->judul) {
            $data['slug'] = $this->generateSlug($data['judul'], $informasi->id);
        }

        // Gambar opsional saat update — hanya diganti kalau user upload file baru.
        if ($request->hasFile('gambar')) {
            if ($informasi->gambar) {
                Storage::disk('public')->delete($informasi->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('informasi', 'public');
        }

        // user_id tetap milik pembuat awal — tidak diubah saat update.
        $informasi->update($data);

        flash()->success('Data ' . strtolower($this->kategoriMap[$informasi->kategori]['label']) . ' berhasil diperbarui.');

        return redirect()->route($this->kategoriMap[$informasi->kategori]['route']);
    }

    public function destroy(Request $request, Informasi $informasi)
    {
        $this->authorizeOwnership($request, $informasi);

        $route = $this->kategoriMap[$informasi->kategori]['route'];

        if ($informasi->gambar) {
            Storage::disk('public')->delete($informasi->gambar);
        }

        $informasi->delete();

        flash()->success('Data ' . strtolower($this->kategoriMap[$informasi->kategori]['label']) . ' berhasil dihapus.');

        return redirect()->route($route);
    }

    /* ===================== HELPERS ===================== */

    /**
     * Validasi data form. Gambar WAJIB saat create, OPSIONAL saat update
     * (kalau tidak diupload ulang, gambar lama tetap dipakai).
     */
    protected function validateData(Request $request, bool $isUpdate): array
    {
        return $request->validate([
            'judul' => 'required|string|max:255',
            'ringkasan' => 'nullable|string|max:500',
            'isi' => 'required|string',
            'gambar' => ($isUpdate ? 'nullable' : 'required') . '|image|max:2048',
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

    /**
     * Role 'youth_forum' hanya boleh edit/update/destroy data miliknya sendiri.
     * Role lain (mis. admin) tidak dibatasi.
     */
    protected function authorizeOwnership(Request $request, Informasi $informasi): void
    {
        if ($request->user()->role === 'youth_forum') {
            abort_unless($informasi->user_id === $request->user()->id, 403, 'Anda hanya dapat mengelola data yang Anda input sendiri.');
        }
    }
}
