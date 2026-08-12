@extends('layouts.main')

@section('title', 'Geopark Ternate | Warisan Geologi, Alam & Budaya Ternate')
@section('meta_description',
    'Geopark Ternate merupakan kawasan yang memiliki kekayaan warisan geologi, keanekaragaman
    hayati, dan warisan budaya. Jelajahi geosite, geowisata, edukasi, konservasi, dan potensi masyarakat Ternate.')

    @push('styles')
        <style>
            /* =================================
                               PETA GEOPARK TERNATE
                            ================================= */
            .geopark-map-content p {
                color: #555;
                line-height: 1.8;
                margin-bottom: 15px;
            }

            .geopark-map-wrapper {
                width: 100%;
                overflow: hidden;
                border-radius: 8px;
                background: #fff;
                padding: 10px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            }

            .geopark-map {
                width: 100%;
                height: auto;
                display: block;
                border-radius: 5px;
            }

            /* =================================
                               MOBILE
                            ================================= */
            @media (max-width: 767.98px) {

                .geopark-map-content {
                    padding: 25px;
                    margin-bottom: 30px;
                }

                .geopark-map-content h3 {
                    font-size: 21px;
                }

            }
        </style>
    @endpush

@section('content')

    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('frontend/gambar/tolire1.jpg') }}');">
        <div class="overlay2"></div>

        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">

                    <h1 class="mb-4">Jelajahi Warisan Geologi Pulau Rempah</h1>
                    <p class="caps">Menyusuri jejak vulkanik Gunung Gamalama hingga pesona bahari Kota Ternate, sang
                        Volcano and Spice Island</p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">

                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">

                        <span class="subheading">Geopark Ternate</span>

                        <h2 class="mb-4">Menjaga Warisan Bumi untuk Masa Depan</h2>

                        <p>
                            Geopark Ternate merupakan kawasan yang memiliki kekayaan geologi,
                            keanekaragaman hayati, dan warisan budaya yang bernilai. Keunikan
                            Pulau Ternate sebagai pulau vulkanik yang terbentuk oleh Gunung
                            Gamalama menjadi bagian penting dari kekayaan tersebut.
                        </p>

                        <p>
                            Pengembangan Geopark Ternate diarahkan pada konservasi, pendidikan,
                            geowisata, serta pemberdayaan masyarakat secara berkelanjutan.
                            Melalui keterlibatan pemerintah, masyarakat, komunitas, dan berbagai
                            pemangku kepentingan, Geopark Ternate diharapkan dapat menjadi
                            sumber pengetahuan sekaligus penggerak ekonomi lokal.
                        </p>

                        <p>
                            <a href="{{ url('/tentang-kami') }}" class="btn btn-primary py-3 px-4">
                                Selengkapnya
                            </a>
                        </p>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">

                        {{-- Konservasi --}}
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-1 d-block img"
                                style="background-image: url('{{ asset('frontend/gambar/konservasi.jpg') }}');">

                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-map"></span>
                                </div>

                                <div class="media-body">
                                    <h3 class="heading mb-3">Konservasi</h3>
                                    <p>
                                        Melindungi warisan geologi, keanekaragaman hayati,
                                        dan warisan budaya Ternate.
                                    </p>
                                </div>

                            </div>
                        </div>

                        {{-- Edukasi --}}
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-2 d-block img"
                                style="background-image: url('{{ asset('frontend/gambar/edukasi.jpg') }}');">

                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-tour-guide"></span>
                                </div>

                                <div class="media-body">
                                    <h3 class="heading mb-3">Edukasi</h3>
                                    <p>
                                        Meningkatkan pengetahuan dan kepedulian masyarakat
                                        terhadap bumi dan lingkungan.
                                    </p>
                                </div>

                            </div>
                        </div>

                        {{-- Geowisata --}}
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-3 d-block img"
                                style="background-image: url('{{ asset('frontend/gambar/batu-angus1.png') }}');">

                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-route"></span>
                                </div>

                                <div class="media-body">
                                    <h3 class="heading mb-3">Geowisata</h3>
                                    <p>
                                        Mengembangkan wisata berbasis geologi, alam, dan
                                        budaya secara berkelanjutan.
                                    </p>
                                </div>

                            </div>
                        </div>

                        {{-- Masyarakat --}}
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-4 d-block img"
                                style="background-image: url('{{ asset('frontend/gambar/tari-lenso.jpeg') }}');">

                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-paragliding"></span>
                                </div>

                                <div class="media-body">
                                    <h3 class="heading mb-3">Pemberdayaan</h3>
                                    <p>
                                        Mendorong keterlibatan masyarakat dan pertumbuhan
                                        ekonomi lokal di kawasan Geopark.
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section img ftco-select-destination">

        <div class="container">

            {{-- Judul --}}
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">

                    <span class="subheading">Geopark Ternate</span>

                    <h2 class="mb-4">Peta Geopark Ternate</h2>

                </div>
            </div>

            {{-- Isi --}}
            <div class="row align-items-center">

                {{-- Penjelasan --}}
                <div class="col-md-6 ftco-animate">

                    <div class="geopark-map-content">

                        <p>
                            Peta Geopark Ternate menggambarkan sebaran kawasan dan
                            situs warisan yang memiliki nilai geologi, keanekaragaman
                            hayati, serta warisan budaya di wilayah Ternate.
                        </p>

                        <p>
                            Keunikan Pulau Ternate sebagai pulau vulkanik yang terbentuk
                            oleh aktivitas Gunung Gamalama menjadikan kawasan ini memiliki
                            berbagai geosite dan bentang alam yang bernilai untuk
                            konservasi, edukasi, penelitian, dan pengembangan geowisata.
                        </p>

                        <p>
                            Peta ini menjadi media informasi untuk mengenali lokasi
                            berbagai situs Geopark Ternate serta memahami keterkaitan
                            antara kekayaan alam dan budaya yang menjadi identitas
                            masyarakat Ternate.
                        </p>

                    </div>

                </div>

                {{-- Gambar Peta --}}
                <div class="col-md-6 ftco-animate">

                    <div class="geopark-map-wrapper">

                        <a href="{{ asset('frontend/gambar/peta-geopark.png') }}" class="image-popup"
                            title="Peta Geopark Ternate">

                            <img src="{{ asset('frontend/gambar/peta-geopark.jpg') }}" alt="Peta Geopark Ternate"
                                class="img-fluid geopark-map">

                        </a>

                    </div>

                </div>
            </div>

        </div>

    </section>

    <section class="ftco-section img ftco-select-destination"
        style="background-image: url('{{ asset('frontend/gambar/bg2.png') }}');">

        <div class="container">

            {{-- Judul --}}
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">

                    <span class="subheading">Kawasan Geopark Ternate</span>

                    <h2 class="mb-4">Geosite Unggulan</h2>

                </div>
            </div>

            {{-- Geosite --}}
            <div class="container container-2">
                <div class="row">

                    <div class="col-md-12">

                        <div class="carousel-destination owl-carousel ftco-animate">

                            {{-- 1. Lava Erupsi 1737 Batu Angus --}}
                            <div class="item">
                                <div class="project-destination">

                                    <a href="{{ url('/warisan-bumi') }}" class="img"
                                        style="background-image: url('{{ asset('frontend/gambar/batu-angus1.png') }}');">

                                        <div class="text">
                                            <h3>Lava Erupsi 1737 Batu Angus</h3>
                                            <span>Kulaba, Ternate Barat</span>
                                        </div>

                                    </a>

                                </div>
                            </div>

                            {{-- 2. Maar Tolire --}}
                            <div class="item">
                                <div class="project-destination">

                                    <a href="{{ url('/warisan-bumi') }}" class="img"
                                        style="background-image: url('{{ asset('frontend/gambar/tolire1.jpg') }}');">

                                        <div class="text">
                                            <h3>Maar Tolire</h3>
                                            <span>Takome, Ternate Barat</span>
                                        </div>

                                    </a>

                                </div>
                            </div>

                            {{-- 3. Lava Pahoehoe Sulamadaha --}}
                            <div class="item">
                                <div class="project-destination">

                                    <a href="{{ url('/warisan-bumi') }}" class="img"
                                        style="background-image: url('{{ asset('frontend/gambar/sulamadaha.jpg') }}');">

                                        <div class="text">
                                            <h3>Lava Pahoehoe Sulamadaha</h3>
                                            <span>Sulamadaha, Ternate Barat</span>
                                        </div>

                                    </a>

                                </div>
                            </div>

                            {{-- 4. Maar Ngade --}}
                            <div class="item">
                                <div class="project-destination">

                                    <a href="{{ url('/warisan-bumi') }}" class="img"
                                        style="background-image: url('{{ asset('frontend/gambar/ngade.jpg') }}');">

                                        <div class="text">
                                            <h3>Maar Ngade</h3>
                                            <span>Ngade, Ternate Selatan</span>
                                        </div>

                                    </a>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                {{-- Tombol Selengkapnya --}}
                <div class="row justify-content-center mt-4">

                    <div class="col-md-12 text-center">

                        <a href="{{ url('/warisan-bumi') }}" class="btn btn-primary py-3 px-4">
                            Selengkapnya
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="ftco-section ftco-about img"
        style="background-image: url('{{ asset('frontend/gambar/benteng-orange.jpg') }}');">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center"
                                style="background-image:url('{{ asset('frontend/gambar/soya-soya.jpeg') }}');">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Tentang Kami</span>
                                    <h2 class="mb-4">Menjaga Warisan Geologi, Menghidupkan Kearifan Lokal</h2>
                                    <p>Ternate Geopark hadir untuk melestarikan bentang alam vulkanik hasil letusan
                                        Gunung Gamalama, mulai dari hamparan lava beku Batu Angus hingga danau kawah
                                        Tolire, sekaligus mengangkat sejarah Ternate sebagai Kota Rempah dan pusat
                                        Kesultanan Ternate.</p>
                                    <p><a href="{{ url('/tentang-kami') }}" class="btn btn-primary">Selengkapnya
                                            Tentang Kami</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Artikel Kami</span>
                    <h2 class="mb-4">Postingan Terbaru</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('{{ asset('frontend/images/image_1.jpg') }}');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">11</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2026</span>
                                    <span class="mos">Agustus</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Menuju UNESCO Global Geopark, Ini Progres 19 Geosite
                                    Ternate</a></h3>
                            <p><a href="#" class="btn btn-primary">Baca selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('{{ asset('frontend/images/image_2.jpg') }}');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">11</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2026</span>
                                    <span class="mos">Agustus</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Mengenal Legenda dan Geologi Maar Tolire</a></h3>
                            <p><a href="#" class="btn btn-primary">Baca selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('{{ asset('frontend/images/image_3.jpg') }}');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">11</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2026</span>
                                    <span class="mos">Agustus</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="#">Volcano and Spice Island: Identitas Baru Kota
                                    Ternate</a></h3>
                            <p><a href="#" class="btn btn-primary">Baca selengkapnya</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url('{{ asset('frontend/gambar/kuso.jpeg') }}');">
                        <div class="overlay"></div>
                        <h2>Kami Adalah Ternate Geopark</h2>
                        <p>Mari mengenal lebih dekat warisan vulkanik dan budaya rempah Kota Ternate melalui informasi
                            dan edukasi geopark kami</p>
                        <p class="mb-0"><a href="{{ url('/tentang-kami') }}"
                                class="btn btn-primary px-4 py-3">Pelajari Lebih Lanjut</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        $('.image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom',
            image: {
                verticalFit: true,
                titleSrc: 'title'
            },
            zoom: {
                enabled: true,
                duration: 300
            }
        });
    </script>
@endpush
