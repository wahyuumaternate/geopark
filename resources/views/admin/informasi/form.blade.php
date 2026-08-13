@extends('admin.layouts.main', ['title' => ($item->exists ? 'Edit' : 'Tambah') . ' ' . $title])

@section('main')
    <section class="section dashboard">
        <div class="row mb-4">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route($kategori === 'berita' ? 'admin.berita.index' : 'admin.youthforum.index') }}">
                                {{ $title }}
                            </a>
                        </li>
                        <li class="breadcrumb-item active">{{ $item->exists ? 'Edit Data' : 'Tambah Data' }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->exists ? 'Edit' : 'Tambah' }} Data {{ $title }}</h5>

                        <form
                            action="{{ $item->exists ? route('admin.informasi.update', $item) : route('admin.informasi.store', $kategori) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($item->exists)
                                @method('PUT')
                            @endif

                            {{-- Judul --}}
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                        id="judul" name="judul" value="{{ old('judul', $item->judul) }}" required>
                                    @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Ringkasan --}}
                            <div class="row mb-3">
                                <label for="ringkasan" class="col-sm-2 col-form-label">Ringkasan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @error('ringkasan') is-invalid @enderror" id="ringkasan" name="ringkasan" rows="2"
                                        maxlength="500">{{ old('ringkasan', $item->ringkasan) }}</textarea>
                                    <div class="form-text">Maksimal 500 karakter. Tampil sebagai cuplikan di daftar
                                        {{ $title }}.</div>
                                    @error('ringkasan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Gambar --}}
                            <div class="row mb-3">
                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                        id="gambar" name="gambar" accept="image/*" onchange="previewImage(event)">
                                    @error('gambar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-2">
                                        <img id="preview"
                                            src="{{ $item->gambar ? asset('storage/' . $item->gambar) : '' }}"
                                            alt="Preview"
                                            style="max-width: 200px; {{ $item->gambar ? '' : 'display: none;' }}"
                                            class="img-thumbnail">
                                    </div>
                                </div>
                            </div>

                            {{-- Isi --}}
                            {{-- Isi --}}
                            <div class="row mb-3">
                                <label for="isi" class="col-sm-2 col-form-label">Isi <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="8">{{ old('isi', $item->isi) }}</textarea>
                                    @error('isi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Tanggal Terbit --}}
                            <div class="row mb-3">
                                <label for="diterbitkan_pada" class="col-sm-2 col-form-label">Tanggal Terbit</label>
                                <div class="col-sm-10">
                                    <input type="datetime-local"
                                        class="form-control @error('diterbitkan_pada') is-invalid @enderror"
                                        id="diterbitkan_pada" name="diterbitkan_pada"
                                        value="{{ old('diterbitkan_pada', optional($item->diterbitkan_pada)->format('Y-m-d\TH:i')) }}">
                                    <div class="form-text">Kosongkan jika ingin diisi otomatis saat status
                                        "Terbitkan" diaktifkan.</div>
                                    @error('diterbitkan_pada')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Status --}}
                            <div class="row mb-4">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <div class="form-check form-switch pt-2">
                                        <input class="form-check-input" type="checkbox" role="switch" id="status"
                                            name="status" value="1"
                                            {{ old('status', $item->status ?? true) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status">Terbitkan {{ strtolower($title) }}
                                            ini</label>
                                    </div>
                                </div>
                            </div>

                            {{-- kategori mengikuti route/model, tidak diinput manual --}}

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-info text-white me-2">
                                        <i class="bi bi-check-circle me-1"></i>Simpan
                                    </button>
                                    <a href="{{ route($kategori === 'berita' ? 'admin.berita.index' : 'admin.youthforum.index') }}"
                                        class="btn btn-secondary">
                                        <i class="bi bi-x-circle me-1"></i>Batal
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        function previewImage(event) {
            const preview = document.getElementById('preview');
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        }

        tinymce.init({
            selector: '#isi',
            plugins: 'lists link image table code',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
            height: 350
        });

        // Pastikan konten TinyMCE ter-sync ke textarea sebelum submit
        document.querySelector('form').addEventListener('submit', function() {
            if (typeof tinymce !== 'undefined') {
                tinymce.triggerSave();
            }
        });
    </script>
@endsection
