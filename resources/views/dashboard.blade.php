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
                            Selamat datang di <strong>GEOPARK TERNATE</strong> .
                            Gunakan menu di sebelah kiri untuk mengelola data petani, komoditas, penjualan, dan laporan.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
