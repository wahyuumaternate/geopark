@extends('layouts.main')

@section('title', $informasi->judul . ' | Geopark Ternate')
@section('meta_description', $informasi->ringkasan ?? Str::limit(strip_tags($informasi->isi), 150))

@section('page_bg', $informasi->gambar ? asset('storage/' . $informasi->gambar) :
    asset('frontend/gambar/peta-geopark.jpg'))
@section('page_title', $informasi->judul)

@section('content')

    <section class="ftco-section">
        <div class="container">

            <div class="row d-flex">
                <div class="col-md-7 ftco-animate">
                    <div class="media d-block mb-4">
                        <div class="img d-flex align-items-end"
                            style="background-image:url('{{ $informasi->gambar ? asset('storage/' . $informasi->gambar) : asset('frontend/gambar/peta-geopark.jpg') }}'); min-height:320px; background-size:cover; background-position:center;">
                        </div>
                    </div>
                    <div class="text pt-4">
                        <p class="text-muted">
                            {{ $informasi->diterbitkan_pada->translatedFormat('d F Y') }} | {{ $backLabel }}
                        </p>

                        <h3 class="mb-4">{{ $informasi->judul }}</h3>

                        @if ($informasi->ringkasan)
                            <p class="lead">{{ $informasi->ringkasan }}</p>
                        @endif

                        <div class="content-body">
                            {!! $informasi->isi !!}
                        </div>

                        <p class="mt-4">
                            <a href="{{ $backUrl }}" class="btn btn-primary">
                                <i class="bi bi-arrow-left me-1"></i>Kembali ke {{ $backLabel }}
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-md-5 ftco-animate">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <h3 class="mb-4">Ringkasan</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <strong>Berita:</strong> update terbaru Geopark Ternate dan perkembangan UNESCO Global
                                Geopark.
                            </li>
                            <li class="mb-3">
                                <strong>Youth Forum:</strong> ruang aksi dan diskusi bagi generasi muda peduli lingkungan
                                dan budaya.
                            </li>
                        </ul>
                        <h3 class="mb-4">Kontak</h3>
                        <p>Untuk informasi lebih detil tentang program, silakan hubungi tim Geopark Ternate.</p>
                        <p class="mb-1"><span class="icon fa fa-phone"></span> +62 921 000 0000</p>
                        <p><span class="icon fa fa-paper-plane"></span> info@ternategeopark.id</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
