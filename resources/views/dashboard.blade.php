@extends('admin.layouts.main', ['title' => 'Dashboard'])

@section('main')
    <section class="section dashboard">

        <!-- Welcome -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body py-4">
                        <h4 class="fw-bold mb-2">
                            Selamat Datang, {{ Auth::user()->name }}
                        </h4>

                        @if (Auth::user()->role === 'youth_forum')
                            <p class="mb-0 text-muted">
                                Selamat datang di <strong>Geopark Ternate </strong>. Anda login sebagai
                                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary">Youth
                                    Forum</span>.
                                Gunakan menu di sebelah kiri untuk mengelola konten Youth Forum.
                            </p>
                        @else
                            <p class="mb-0 text-muted">
                                Selamat datang di <strong>Geopark Ternate </strong>. Gunakan menu di sebelah kiri
                                untuk
                                mengelola konten situs, termasuk Warisan Bumi, Berita, Youth Forum, dan
                                publikasi.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @if (Auth::user()->role === 'youth_forum')
            {{-- ==================== TAMPILAN UNTUK ROLE: YOUTH FORUM ==================== --}}

            <!-- Statistik -->
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Konten Youth Forum</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>{{ $youthForumCount ?? 0 }}</h4>
                                    <small class="text-muted">Total artikel</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Dipublikasikan</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>{{ $youthForumPublishedCount ?? 0 }}</h4>
                                    <small class="text-muted">Sudah tayang</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Draft</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>{{ $youthForumDraftCount ?? 0 }}</h4>
                                    <small class="text-muted">Belum tayang</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- Quick Action -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Aksi Cepat</h5>

                            <div class="d-flex flex-wrap gap-2 py-3">
                                <a href="{{ route('admin.youthforum.index') }}" class="btn btn-info text-white">
                                    <i class="bi bi-list-ul me-1"></i>Lihat Semua Konten
                                </a>
                                <a href="{{ route('admin.informasi.create', 'youth-forum') }}"
                                    class="btn btn-outline-primary">
                                    <i class="bi bi-plus-circle me-1"></i>Tambah Konten Baru
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @else
            {{-- ==================== TAMPILAN UNTUK ROLE: ADMIN ==================== --}}

            <!-- Statistik -->
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Warisan Geologi</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>{{ $geologiCount ?? 0 }}</h4>
                                    <small class="text-muted">Data geosite</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Warisan Biologi</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-tree-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>{{ $biologiCount ?? 0 }}</h4>
                                    <small class="text-muted">Data flora & fauna</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Warisan Budaya</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-museum"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>{{ $budayaCount ?? 0 }}</h4>
                                    <small class="text-muted">Data budaya</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card info-card">
                        <div class="card-body">
                            <h5 class="card-title">Konten Publik</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-newspaper"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>{{ $kontenPublikCount ?? 0 }}</h4>
                                    <small class="text-muted">Berita & Youth Forum</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        @endif

    </section>
@endsection
