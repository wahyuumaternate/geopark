@extends('admin.layouts.main', ['title' => ($item->exists ? 'Edit' : 'Tambah') . ' ' . $title])

@section('main')
    <section class="section dashboard">
        <div class="row mb-4">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route($kategoriRouteMap[$kategori] ?? 'admin.publikasi.index') }}">
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
                            action="{{ $item->exists ? route('admin.unduh.update', $item) : route('admin.unduh.store', $kategori) }}"
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

                            {{-- Deskripsi --}}
                            <div class="row mb-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="3"
                                        maxlength="1000">{{ old('deskripsi', $item->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- File --}}
                            <div class="row mb-3">
                                <label for="file" class="col-sm-2 col-form-label">File
                                    {{ $item->exists ? '' : '*' }}</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control @error('file') is-invalid @enderror"
                                        id="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx"
                                        {{ $item->exists ? '' : 'required' }}>
                                    <div class="form-text">Format: PDF, DOC, DOCX, XLS, XLSX. Maks 10MB.</div>
                                    @error('file')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    @if ($item->file)
                                        <div class="mt-2">
                                            <a href="{{ asset('storage/' . $item->file) }}" target="_blank"
                                                class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-file-earmark-arrow-down me-1"></i>Lihat file saat ini
                                            </a>
                                            <div class="form-text">Unggah file baru untuk menggantikan file ini.</div>
                                        </div>
                                    @endif
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

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-info text-white me-2">
                                        <i class="bi bi-check-circle me-1"></i>Simpan
                                    </button>
                                    <a href="{{ route($kategoriRouteMap[$kategori] ?? 'admin.publikasi.index') }}"
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
