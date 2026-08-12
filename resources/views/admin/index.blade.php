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
                    <p class="mb-0 text-muted">
                        Selamat datang di <strong>Geopark Ternate Admin</strong>. Gunakan menu di sebelah kiri untuk mengelola konten situs, termasuk Warisan Bumi, Berita, Events, Youth Forum, dan publikasi.
                    </p>
                </div>
            </div>
        </div>
    </div>

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
                            <h4>0</h4>
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
                            <h4>0</h4>
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
                            <h4>0</h4>
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
                            <h4>0</h4>
                            <small class="text-muted">Berita & event</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Placeholder -->
    <div class="row">

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Analytics Pengunjung</h5>

                    <div class="text-center text-muted py-5">
                        <i class="bi bi-graph-up display-4"></i>
                        <p class="mt-3 mb-0">
                            Ringkasan pengunjung dan interaksi akan ditampilkan setelah data tersedia.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Area Fokus</h5>

                    <div class="text-center text-muted py-5">
                        <i class="bi bi-geo-alt display-4"></i>
                        <p class="mt-3 mb-0">
                            Kelola informasi geoheritage, acara, dan studi generasi muda di sini.
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>

</section>
@endsection