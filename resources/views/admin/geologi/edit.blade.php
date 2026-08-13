@extends('admin.layouts.main', ['title' => 'Edit Warisan Geologi'])

@section('main')
    <section class="section dashboard">
        <div class="row mb-4">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.geologi.index') }}">Warisan Geologi</a></li>
                        <li class="breadcrumb-item active">Edit Data</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Data Warisan Geologi</h5>

                        <form action="{{ route('admin.geologi.update', $geologi) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" value="{{ old('nama', $geologi->nama) }}" required>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>

                                <div class="col-sm-10">
                                    <select class="form-select @error('jenis') is-invalid @enderror" id="jenis"
                                        name="jenis">

                                        <option value="">-- Pilih Jenis --</option>

                                        <option value="Geologi"
                                            {{ old('jenis', $geologi->jenis) == 'Geologi' ? 'selected' : '' }}>
                                            Geologi
                                        </option>

                                        <option value="Biologi"
                                            {{ old('jenis', $geologi->jenis) == 'Biologi' ? 'selected' : '' }}>
                                            Biologi
                                        </option>

                                        <option value="Hayati"
                                            {{ old('jenis', $geologi->jenis) == 'Hayati' ? 'selected' : '' }}>
                                            Hayati
                                        </option>

                                    </select>

                                    @error('jenis')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    @if ($geologi->image)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $geologi->image) }}" alt="Current Image"
                                                class="img-thumbnail" style="max-width: 200px;">
                                            <p class="text-muted small mt-1">Gambar saat ini</p>
                                        </div>
                                    @endif
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="image" accept="image/*" onchange="previewImage(event)">
                                    <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar</small>
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="mt-2">
                                        <img id="preview" src="" alt="Preview"
                                            style="max-width: 200px; display: none;" class="img-thumbnail">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" rows="2"
                                        required>{{ old('lokasi', $geologi->lokasi) }}</textarea>
                                    @error('lokasi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('kelurahan') is-invalid @enderror"
                                        id="kelurahan" name="kelurahan"
                                        value="{{ old('kelurahan', $geologi->kelurahan) }}">
                                    @error('kelurahan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('kecamatan') is-invalid @enderror"
                                        id="kecamatan" name="kecamatan"
                                        value="{{ old('kecamatan', $geologi->kecamatan) }}">
                                    @error('kecamatan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('kota') is-invalid @enderror"
                                        id="kota" name="kota" value="{{ old('kota', $geologi->kota) }}">
                                    @error('kota')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="x" class="col-sm-2 col-form-label">Koordinat X</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('x') is-invalid @enderror"
                                        id="x" name="x" value="{{ old('x', $geologi->x) }}"
                                        placeholder="Longitude">
                                    @error('x')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="y" class="col-sm-2 col-form-label">Koordinat Y</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('y') is-invalid @enderror"
                                        id="y" name="y" value="{{ old('y', $geologi->y) }}"
                                        placeholder="Latitude">
                                    @error('y')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                                        rows="5" required>{{ old('deskripsi', $geologi->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-info text-white me-2">
                                        <i class="bi bi-check-circle me-1"></i>Update
                                    </button>
                                    <a href="{{ route('admin.geologi.index') }}" class="btn btn-secondary">
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
            selector: '#deskripsi',
            plugins: 'lists link image table code',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
            height: 300
        });
    </script>
@endsection
