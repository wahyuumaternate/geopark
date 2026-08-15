@extends('admin.layouts.main', ['title' => 'Profil Saya'])

@section('main')
    <section class="section">
        <div class="pagetitle">
            <h1>Profil Saya</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profil Saya</li>
                </ol>
            </nav>
        </div>

        @if (session('status') === 'profile-updated')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>Profil berhasil diperbarui.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('status') === 'password-updated')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>Password berhasil diperbarui.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">

            <div class="col-lg-8">

                {{-- Update Informasi Profil --}}
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Informasi Profil</h5>
                        <p class="text-muted small mb-3">Perbarui nama dan alamat email akun Anda.</p>

                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>

                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror {{ Auth::user()->role === 'youth_forum' ? 'readonly-dark' : '' }}"
                                    value="{{ old('name', Auth::user()->name) }}" @readonly(Auth::user()->role === 'youth_forum') required autofocus>

                                @if (Auth::user()->role === 'youth_forum')
                                    <small class="text-muted">
                                        <i class="bi bi-info-circle"></i>
                                        Nama tidak dapat diubah. Silakan hubungi admin jika ingin melakukan perubahan.
                                    </small>
                                @endif

                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', Auth::user()->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !Auth::user()->hasVerifiedEmail())
                                    <div class="mt-2">
                                        <p class="small text-warning mb-1">
                                            <i class="bi bi-exclamation-triangle me-1"></i>Email Anda belum
                                            terverifikasi.
                                            <button form="send-verification" class="btn btn-link btn-sm p-0 align-baseline">
                                                Kirim ulang email verifikasi.
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="small text-success mb-0">
                                                Link verifikasi baru telah dikirim ke email Anda.
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-info text-white">
                                <i class="bi bi-save me-1"></i>Simpan Perubahan
                            </button>
                        </form>

                        @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !Auth::user()->hasVerifiedEmail())
                            <form id="send-verification" method="POST" action="{{ route('verification.send') }}"
                                class="d-none">
                                @csrf
                            </form>
                        @endif
                    </div>
                </div>

                {{-- Update Password --}}
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Ubah Password</h5>
                        <p class="text-muted small mb-3">Pastikan akun Anda menggunakan password yang panjang dan
                            acak agar tetap aman.</p>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="current_password" class="form-label">Password Saat Ini</label>
                                <input type="password" name="current_password" id="current_password"
                                    class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                                    autocomplete="current-password">
                                @error('current_password', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password Baru</label>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                                    autocomplete="new-password">
                                @error('password', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
                                    autocomplete="new-password">
                                @error('password_confirmation', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-info text-white">
                                <i class="bi bi-key me-1"></i>Ubah Password
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </section>
@endsection

@section('styles')
    <style>
        .pagetitle h1 {
            font-size: 24px;
        }

        .readonly-dark {
            background-color: #e2e3e5 !important;
            color: #495057;
            border-color: #adb5bd;
            cursor: not-allowed;
        }

        .readonly-dark:focus {
            background-color: #e2e3e5 !important;
            border-color: #adb5bd;
            box-shadow: none;
        }
    </style>
@endsection
