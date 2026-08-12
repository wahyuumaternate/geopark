@extends('admin.layouts.main', ['title' => 'Warisan Geologi'])

@section('main')
<section class="section dashboard">
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <div>
                <h4 class="fw-bold mb-2">Warisan Geologi</h4>
                <p class="text-muted mb-0">Kelola data Warisan Geologi untuk situs Geopark Ternate.</p>
            </div>
            <a href="{{ route('admin.geologi.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-1"></i>Tambah Data
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="geologiTable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Lokasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($items as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if($item->image)
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama }}" class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;">
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jenis ?? '-' }}</td>
                                        <td>{{ Str::limit($item->lokasi, 50) }}</td>
                                        <td>
                                            <a href="{{ route('admin.geologi.edit', $item) }}" class="btn btn-sm btn-primary me-1">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $item->id }})">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                            <form id="delete-form-{{ $item->id }}" action="{{ route('admin.geologi.destroy', $item) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-4">Belum ada data warisan geologi.</td>
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
@endsection

@section('scripts')
<script src="{{ asset('admin/vendor/datatables/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#geologiTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json"
            },
            "pageLength": 10,
            "order": [[0, "asc"]],
            "columnDefs": [
                { "orderable": false, "targets": [1, 5] }
            ]
        });
    });
</script>
@endsection
