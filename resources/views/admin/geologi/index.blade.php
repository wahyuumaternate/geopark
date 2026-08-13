@extends('admin.layouts.main', ['title' => 'Warisan Geologi'])

@section('main')
    <section class="section">
        {{-- Page Title & Breadcrumb (pola standar NiceAdmin) --}}
        <div class="pagetitle">
            <h1>Warisan Geologi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Warisan Geologi</li>
                </ol>
            </nav>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h5 class="card-title mb-1">Daftar Warisan Geologi</h5>
                                <p class="text-muted small mb-0">Kelola data Warisan Geologi untuk situs Geopark Ternate.
                                </p>
                            </div>
                            <a href="{{ route('admin.geologi.create') }}" class="btn btn-info text-white">
                                <i class="bi bi-plus-circle me-1"></i>Tambah Data
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table id="geologiTable" class="table table-striped table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-center" style="width:50px;">#</th>
                                        <th style="width:90px;">Gambar</th>
                                        <th>Nama</th>
                                        <th>Jenis</th>
                                        <th>Lokasi</th>
                                        <th class="text-center" style="width:120px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($items as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($item->image)
                                                    <img src="{{ asset('storage/' . $item->image) }}"
                                                        alt="{{ $item->nama }}" class="rounded shadow-sm"
                                                        style="width: 60px; height: 60px; object-fit: cover;">
                                                @else
                                                    <div class="d-flex align-items-center justify-content-center bg-light rounded"
                                                        style="width: 60px; height: 60px;">
                                                        <i class="bi bi-image text-muted"></i>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="fw-semibold">{{ $item->nama }}</td>
                                            <td>
                                                @if ($item->jenis)
                                                    <span
                                                        class="badge bg-primary bg-opacity-10 text-primary border border-primary">
                                                        {{ $item->jenis }}
                                                    </span>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td>
                                                <i class="bi bi-geo-alt text-danger me-1"></i>
                                                {{ Str::limit($item->lokasi, 50) }}
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="{{ route('admin.geologi.edit', $item) }}"
                                                        class="btn btn-sm btn-outline-primary" title="Edit">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                                        title="Hapus"
                                                        onclick="confirmDelete({{ $item->id }}, '{{ addslashes($item->nama) }}')">
                                                        <i class="bi bi-trash3"></i>
                                                    </button>
                                                </div>
                                                <form id="delete-form-{{ $item->id }}"
                                                    action="{{ route('admin.geologi.destroy', $item) }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted py-5">
                                                <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                                Belum ada data warisan geologi.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <link href="{{ asset('admin/vendor/datatables/datatables.min.css') }}" rel="stylesheet">
    <style>
        #geologiTable img {
            transition: transform .2s ease;
        }

        #geologiTable img:hover {
            transform: scale(1.6);
            position: relative;
            z-index: 5;
        }

        .pagetitle h1 {
            font-size: 24px;
        }
    </style>
@endsection

@section('scripts')
    <script src="{{ asset('admin/vendor/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#geologiTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json"
                },
                pageLength: 10,
                order: [
                    [0, "asc"]
                ],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 5]
                }]
            });
        });

        function confirmDelete(id, nama) {
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Hapus data?',
                    text: 'Data "' + nama + '" akan dihapus permanen dan tidak dapat dikembalikan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Ya, hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + id).submit();
                    }
                });
            } else {
                if (confirm('Yakin ingin menghapus data "' + nama + '"?')) {
                    document.getElementById('delete-form-' + id).submit();
                }
            }
        }
    </script>
@endsection
