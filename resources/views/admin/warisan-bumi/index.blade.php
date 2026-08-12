@extends('admin.layouts.main', ['title' => 'Warisan Bumi'])

@section('main')
<section class="section dashboard">
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <div>
                <h4 class="fw-bold mb-2">Warisan Bumi</h4>
                <p class="text-muted mb-0">Kelola data Warisan Geologi, Biologi, dan Budaya untuk situs Geopark Ternate.</p>
            </div>
            <a href="{{ route('warisan-bumi-admin.create') }}" class="btn btn-success">Tambah Warisan Bumi</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Section</th>
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
                                        <td>{{ ucfirst($item->section) }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jenis ?? '-' }}</td>
                                        <td>{{ Str::limit($item->lokasi, 60) }}</td>
                                        <td>
                                            <a href="{{ route('warisan-bumi-admin.edit', $item) }}" class="btn btn-sm btn-primary me-1">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $item->id }})">Hapus</button>
                                            <form id="delete-form-{{ $item->id }}" action="{{ route('warisan-bumi-admin.destroy', $item) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">Belum ada data warisan bumi.</td>
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
