@extends('layouts.main')

@section('title', 'Youth Forum | Geopark Ternate')
@section('meta_description', 'Berita, agenda kegiatan, dan Youth Forum Geopark Ternate — ruang kolaborasi generasi muda untuk edukasi dan konservasi Geopark Ternate.')

@section('page_bg', 'frontend/gambar/tari-lenso.jpeg')
@section('page_title', 'Youth Forum')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Youth Forum Geopark Ternate</h2>
                    <p>
                        Youth Forum Geopark Ternate adalah ruang kolaborasi generasi muda untuk
                        belajar, berbagi ide, dan bergerak bersama dalam edukasi serta konservasi
                        Geopark Ternate.
                    </p>
                </div>
            </div>

            <div class="row d-flex">
                @forelse ($items as $item)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="{{ route('informasi.show', $item) }}" class="block-20"
                                style="background-image: url('{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('frontend/gambar/tari-lenso.jpeg') }}');">
                            </a>
                            <div class="text">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one">
                                        <span class="day">{{ $item->diterbitkan_pada->format('d') }}</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">{{ $item->diterbitkan_pada->format('Y') }}</span>
                                        <span class="mos">{{ $item->diterbitkan_pada->translatedFormat('F') }}</span>
                                    </div>
                                </div>
                                <h3 class="heading">
                                    <a href="{{ route('informasi.show', $item) }}">{{ $item->judul }}</a>
                                </h3>
                                <p><a href="{{ route('informasi.show', $item) }}" class="btn btn-primary">Baca selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        Belum ada agenda Youth Forum yang diterbitkan.
                    </div>
                @endforelse
            </div>

            <div class="row justify-content-center pt-5">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Youth Forum</span>
                    <h2 class="mb-4">Bergabung Bersama Youth Forum</h2>
                    <p>
                        Youth Forum Geopark Ternate terbuka bagi pelajar, mahasiswa, dan
                        komunitas muda yang ingin terlibat dalam kegiatan edukasi, kampanye
                        lingkungan, serta pengembangan geowisata berkelanjutan.
                    </p>
                    <p>
                        <a href="{{ url('/berita-dan-informasi') }}" class="btn btn-primary py-3 px-4">Hubungi
                            Kami</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection