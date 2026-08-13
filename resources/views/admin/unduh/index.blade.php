@extends('admin.layouts.main', ['title' => $title])

@section('main')
    <section class="section">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
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
                                <h5 class="card-title mb-1">Daftar {{ $title }}</h5>
                                <p class="text-muted small mb-0">Kelola data {{ $title }} untuk situs Geopark
                                    Ternate.</p>
                            </div>
                            <a href="{{ route('admin.unduh.create', $kategori) }}" class="btn btn-info text-white">
                                <i class="bi bi-plus-circle me-1"></i>Tambah Data
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table id="unduhTable" class="table table-striped table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-center" style="width:50px;">#</th>
                                        <th>Judul</th>
                                        <th style="width:100px;">File</th>
                                        <th>Status</th>
                                        <th>Tanggal Terbit</th>
                                        <th class="text-center" style="width:120px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($items as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="fw-semibold">
                                                {{ $item->judul }}
                                                <div class="text-muted small">{{ Str::limit($item->deskripsi, 60) }}</div>
                                            </td>
                                            <td>
                                                @if ($item->file)
                                                    <a href="{{ asset('storage/' . $item->file) }}" target="_blank"
                                                        class="btn btn-sm btn-outline-secondary" title="Lihat file">
                                                        <i class="bi bi-file-earmark-arrow-down"></i>
                                                    </a>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->status)
                                                    <span class="badge bg-success">Terbit</span>
                                                @else
                                                    <span class="badge bg-secondary">Draft</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $item->diterbitkan_pada ? $item->diterbitkan_pada->format('d M Y') : '-' }}
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="{{ route('admin.unduh.edit', $item) }}"
                                                        class="btn btn-sm btn-outline-primary" title="Edit">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                                        title="Hapus"
                                                        onclick="confirmDelete({{ $item->id }}, '{{ addslashes($item->judul) }}')">
                                                        <i class="bi bi-trash3"></i>
                                                    </button>
                                                </div>
                                                <form id="delete-form-{{ $item->id }}"
                                                    action="{{ route('admin.unduh.destroy', $item) }}" method="POST"
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
                                                Belum ada data {{ strtolower($title) }}.
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
        .pagetitle h1 {
            font-size: 24px;
        }
    </style>
@endsection

@section('scripts')
    <script src="{{ asset('admin/vendor/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#unduhTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json"
                },
                pageLength: 10,
                order: [
                    [4, "desc"]
                ],
                columnDefs: [{
                    orderable: false,
                    targets: [2, 5]
                }]
            });
        });

        function confirmDelete(id, judul) {
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Hapus data?',
                    text: 'Data "' + judul + '" akan dihapus permanen dan tidak dapat dikembalikan.',
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
                if (confirm('Yakin ingin menghapus data "' + judul + '"?')) {
                    document.getElementById('delete-form-' + id).submit();
                }
            }
        }
    </script>
@endsection
