@extends('admin.layouts.main', ['title' => 'Pengguna'])

@section('main')
    <section class="section">
        <div class="pagetitle">
            <h1>Pengguna</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pengguna</li>
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
                                <h5 class="card-title mb-1">Daftar Pengguna</h5>
                                <p class="text-muted small mb-0">Kelola akun pengguna admin untuk situs Geopark
                                    Ternate.</p>
                            </div>
                            <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                data-bs-target="#userModal" onclick="openCreateModal()">
                                <i class="bi bi-plus-circle me-1"></i>Tambah Pengguna
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table id="usersTable" class="table table-striped table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-center" style="width:50px;">#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th class="text-center" style="width:150px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="fw-semibold">{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->role)
                                                    <span
                                                        class="badge bg-primary bg-opacity-10 text-primary border border-primary text-capitalize">
                                                        {{ $user->role }}
                                                    </span>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center gap-1">
                                                    <button type="button" class="btn btn-sm btn-outline-primary"
                                                        title="Edit" data-bs-toggle="modal" data-bs-target="#userModal"
                                                        onclick="openEditModal({{ $user->id }}, '{{ addslashes($user->name) }}', '{{ addslashes($user->email) }}', '{{ $user->role }}')">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                                        title="Hapus"
                                                        onclick="confirmDelete({{ $user->id }}, '{{ addslashes($user->name) }}')">
                                                        <i class="bi bi-trash3"></i>
                                                    </button>
                                                </div>
                                                <form id="delete-form-{{ $user->id }}"
                                                    action="{{ route('admin.users.destroy', $user) }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted py-5">
                                                <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                                Belum ada data pengguna.
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

        {{-- Modal Tambah / Edit Pengguna --}}
        <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="userForm" method="POST" action="{{ route('admin.users.store') }}">
                        @csrf
                        <input type="hidden" name="_method" id="formMethod" value="POST">

                        <div class="modal-header">
                            <h5 class="modal-title" id="userModalLabel">Tambah Pengguna</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select name="role" id="role"
                                    class="form-select @error('role') is-invalid @enderror" required>

                                    <option value="">-- Pilih Role --</option>

                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>
                                        Admin
                                    </option>

                                    <option value="youth_forum" {{ old('role') == 'youth_forum' ? 'selected' : '' }}>
                                        Youth Forum
                                    </option>
                                </select>

                                @error('role')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    autocomplete="new-password">
                                <small class="form-text text-muted" id="passwordHelp">
                                    Kosongkan jika tidak ingin mengubah password.
                                </small>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-info text-white">
                                <i class="bi bi-save me-1"></i>Simpan
                            </button>
                        </div>
                    </form>
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
            $('#usersTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json"
                },
                pageLength: 10,
                order: [
                    [0, "asc"]
                ],
                columnDefs: [{
                    orderable: false,
                    targets: [4]
                }]
            });

            // Jika ada error validasi dari server (misal saat tambah/edit gagal), buka modal otomatis
            @if ($errors->any())
                var userModal = new bootstrap.Modal(document.getElementById('userModal'));
                userModal.show();
            @endif
        });

        const storeUrl = "{{ route('admin.users.store') }}";
        const updateUrlTemplate = "{{ route('admin.users.update', ':id') }}";

        function openCreateModal() {
            document.getElementById('userModalLabel').innerText = 'Tambah Pengguna';
            document.getElementById('userForm').action = storeUrl;
            document.getElementById('formMethod').value = 'POST';

            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('role').value = '';
            document.getElementById('password').value = '';
            document.getElementById('password_confirmation').value = '';

            document.getElementById('password').required = true;
            document.getElementById('passwordHelp').classList.add('d-none');
        }

        function openEditModal(id, name, email, role) {
            document.getElementById('userModalLabel').innerText = 'Edit Pengguna';
            document.getElementById('userForm').action = updateUrlTemplate.replace(':id', id);
            document.getElementById('formMethod').value = 'PUT';

            document.getElementById('name').value = name;
            document.getElementById('email').value = email;
            document.getElementById('role').value = role;
            document.getElementById('password').value = '';
            document.getElementById('password_confirmation').value = '';

            document.getElementById('password').required = false;
            document.getElementById('passwordHelp').classList.remove('d-none');
        }

        function confirmDelete(id, nama) {
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Hapus pengguna?',
                    text: 'Akun "' + nama + '" akan dihapus permanen dan tidak dapat dikembalikan.',
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
                if (confirm('Yakin ingin menghapus akun "' + nama + '"?')) {
                    document.getElementById('delete-form-' + id).submit();
                }
            }
        }
    </script>
@endsection
