<!DOCTYPE html>
<html lang="en">


<head>
    {{-- =========================
         BASIC SEO
    ========================== --}}
    <title>Geopark Ternate | Warisan Geologi, Alam & Budaya Ternate</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description"
        content="Geopark Ternate merupakan kawasan yang memiliki kekayaan warisan geologi, keanekaragaman hayati, dan warisan budaya. Jelajahi geosite, geowisata, edukasi, konservasi, dan potensi masyarakat Ternate.">

    <meta name="keywords"
        content="Geopark Ternate, Geopark Maluku Utara, Geowisata Ternate, Gunung Gamalama, geosite Ternate, warisan geologi Ternate, wisata Ternate, pariwisata Ternate">

    <meta name="author" content="Geopark Ternate">

    <meta name="robots" content="index, follow, max-image-preview:large">

    <meta name="language" content="id">

    <meta name="revisit-after" content="7 days">

    {{-- Canonical --}}
    <link rel="canonical" href="{{ url('/') }}">


    {{-- =========================
         FAVICON
    ========================== --}}
    <link rel="icon" type="image/png" href="{{ asset('frontend/gambar/logo1.png') }}">

    <link rel="apple-touch-icon" href="{{ asset('frontend/gambar/logo1.png') }}">


    {{-- =========================
         OPEN GRAPH / FACEBOOK
    ========================== --}}
    <meta property="og:type" content="website">

    <meta property="og:title" content="Geopark Ternate | Warisan Geologi, Alam & Budaya">

    <meta property="og:description"
        content="Jelajahi kekayaan geologi, keanekaragaman hayati, budaya, dan destinasi geowisata Geopark Ternate.">

    <meta property="og:url" content="{{ url('/') }}">

    <meta property="og:site_name" content="Geopark Ternate">

    <meta property="og:locale" content="id_ID">

    <meta property="og:image" content="{{ asset('frontend/gambar/logo1.png') }}">

    <meta property="og:image:alt" content="Logo Geopark Ternate">


    {{-- =========================
         TWITTER / X
    ========================== --}}
    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="Geopark Ternate | Warisan Geologi, Alam & Budaya">

    <meta name="twitter:description"
        content="Informasi Geopark Ternate mengenai warisan geologi, geosite, geowisata, keanekaragaman hayati, budaya, edukasi, dan konservasi.">

    <meta name="twitter:image" content="{{ asset('frontend/gambar/logo1.png') }}">


    {{-- =========================
         GOOGLE / SEARCH ENGINE
    ========================== --}}
    <meta name="theme-color" content="#17a2b8">

    <meta name="application-name" content="Geopark Ternate">

    <meta name="apple-mobile-web-app-title" content="Geopark Ternate">


    {{-- =========================
         GOOGLE FONTS
    ========================== --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">


    {{-- =========================
         FONT AWESOME
    ========================== --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    {{-- =========================
         FRONTEND CSS
    ========================== --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">


    {{-- =========================
         CUSTOM CSS
    ========================== --}}
    <style>
        /* ================================
           LOGO GEOPARK TERNATE
        ================================= */

        .geopark-logo {
            display: flex !important;
            align-items: center;
            padding: 0 !important;
            margin-right: 30px;
        }

        .geopark-logo img {
            height: 55px;
            width: auto;
            max-width: 200px;
            object-fit: contain;
            display: block;
        }


        /* ================================
           LOGO TEXT
        ================================= */

        .geopark-logo-text {
            font-size: 10px !important;
            line-height: 1.15 !important;
            font-weight: bold;
            letter-spacing: 0.3px;
            margin-left: 7px;
            color: #000000 !important;
        }


        /* ================================
           NAVBAR
        ================================= */

        .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
            font-size: 13px;
            padding-left: 9px;
            padding-right: 9px;
            white-space: nowrap;
        }


        /* ================================
           DROPDOWN
        ================================= */

        .ftco-navbar-light .dropdown-menu {
            border: none;
            border-radius: 0;
            margin-top: 0;
            padding: 8px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .ftco-navbar-light .dropdown-item {
            font-size: 13px;
            color: #333;
            padding: 9px 20px;
            transition: all 0.2s ease;
        }

        .ftco-navbar-light .dropdown-item:hover {
            background-color: #17a2b8;
            color: #ffffff;
        }


        /* ================================
           TABLET
        ================================= */

        @media (max-width: 1199.98px) {

            .geopark-logo {
                margin-right: 15px;
            }

            .geopark-logo img {
                height: 48px;
                max-width: 170px;
            }

            .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
                font-size: 12px;
                padding-left: 6px;
                padding-right: 6px;
            }
        }


        /* ================================
           MOBILE
        ================================= */

        @media (max-width: 991.98px) {

            .geopark-logo img {
                height: 50px;
                max-width: 170px;
            }

            .geopark-logo {
                margin-right: 0;
            }

            .geopark-logo-text {
                font-size: 8px !important;
                color: #ffffff !important;
            }

            .ftco-navbar-light .dropdown-menu {
                box-shadow: none;
            }

            .ftco-navbar-light .dropdown-item {
                font-size: 13px;
            }
        }


        /* =================================
   PETA GEOPARK TERNATE
================================= */

        /* .geopark-map-content {
            background: rgba(255, 255, 255, 0.95);
            padding: 35px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.10);
        }

        .geopark-map-content h3 {
            font-size: 25px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #222;
        }

        .geopark-map-content p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 15px;
        } */
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
</head>



<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">

            {{-- Logo --}}
            <a class="navbar-brand geopark-logo" href="{{ url('/') }}">
                <img src="{{ asset('frontend/gambar/logo1.png') }}" alt="Geopark Ternate">

                <small class="geopark-logo-text">
                    GEOPARK<br>
                    TERNATE
                </small>
            </a>

            {{-- Mobile Menu --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            {{-- Navigation --}}
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">

                    {{-- Beranda --}}
                    <li class="nav-item active">
                        <a href="{{ url('/') }}" class="nav-link">
                            Beranda
                        </a>
                    </li>

                    {{-- Tentang Kami --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="tentangDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Tentang Kami
                        </a>

                        <div class="dropdown-menu" aria-labelledby="tentangDropdown">
                            <a class="dropdown-item" href="{{ url('/tentang-kami') }}">
                                Tentang
                            </a>

                            <a class="dropdown-item" href="{{ url('/tentang-kami/pengelola') }}">
                                Badan Pengelola
                            </a>
                        </div>
                    </li>

                    {{-- Warisan Bumi --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="warisanDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Warisan Bumi
                        </a>

                        <div class="dropdown-menu" aria-labelledby="warisanDropdown">
                            <a class="dropdown-item" href="{{ url('/warisan-bumi') }}">
                                Warisan Geologi
                            </a>

                            <a class="dropdown-item" href="{{ url('/warisan-bumi/biologi') }}">
                                Warisan Biologi
                            </a>

                            <a class="dropdown-item" href="{{ url('/warisan-bumi/budaya') }}">
                                Warisan Budaya
                            </a>
                        </div>
                    </li>



                    {{-- Berita --}}
                    {{-- events --}}
                    <li class="nav-item">
                        <a href="{{ url('/youth-forum') }}" class="nav-link">
                            Berita
                        </a>
                    </li>

                    {{-- Unduh --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="unduhDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Unduh
                        </a>

                        <div class="dropdown-menu" aria-labelledby="unduhDropdown">
                            <a class="dropdown-item" href="{{ url('/unduh') }}">
                                Dokumen
                            </a>

                            <a class="dropdown-item" href="{{ url('/unduh/publikasi') }}">
                                Publikasi
                            </a>

                            <a class="dropdown-item" href="{{ url('/unduh/peraturan') }}">
                                Peraturan
                            </a>
                        </div>
                    </li>

                    {{-- events --}}
                    <li class="nav-item">
                        <a href="{{ url('/youth-forum') }}" class="nav-link">
                            Events
                        </a>
                    </li>
                    {{-- Youth Forum --}}
                    <li class="nav-item">
                        <a href="{{ url('/youth-forum') }}" class="nav-link">
                            Youth Forum
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- END nav -->

    <div class="hero-wrap js-fullheight"
        style="background-image: url('{{ asset('frontend/gambar/tolire1.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">

                    <h1 class="mb-4">Jelajahi Warisan Geologi Pulau Rempah</h1>
                    <p class="caps">Menyusuri jejak vulkanik Gunung Gamalama hingga pesona bahari Kota Ternate, sang
                        Volcano and Spice Island</p>
                </div>
                {{-- <a href="https://vimeo.com/45830194"
                    class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a> --}}
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
                                style="background-image: url('{{ asset('frontend/gambar/batuangus2.jpeg') }}');">

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


    <section
        class="ftco-section ftco-about img"style="background-image: url('{{ asset('frontend/gambar/benteng-orange.jpg') }}');">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                {{-- <div class="col-md d-flex align-items-center justify-content-center">
                    <a href="https://vimeo.com/45830194"
                        class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                        <span class="fa fa-play"></span>
                    </a>
                </div> --}}
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

    {{-- <section class="ftco-section testimony-section bg-bottom"
        style="background-image: url('{{ asset('frontend/gambar/tolire1.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Testimoni</span>
                    <h2 class="mb-4">Kata Wisatawan</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Batu Angus benar-benar memukau, bebatuan hitam vulkanik yang
                                        membentang sampai ke tepi laut membuat saya takjub dengan kekuatan alam
                                        Gamalama.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url('{{ asset('frontend/images/person_1.jpg') }}')">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Rendra Saputra</p>
                                            <span class="position">Wisatawan Domestik</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Legenda Maar Tolire membuat kunjungan terasa magis, apalagi
                                        pemandu lokal menjelaskan asal-usul geologisnya dengan sangat menarik.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url('{{ asset('frontend/images/person_2.jpg') }}')">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Amelia Putri</p>
                                            <span class="position">Blogger Perjalanan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Menyusuri jejak Lava Erupsi 1737 Batu Angus adalah pengalaman tak
                                        terlupakan, hamparan lava hitam yang menghadap Samudra Pasifik sungguh
                                        spektakuler.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url('{{ asset('frontend/images/person_3.jpg') }}')">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Fadli Ramadhan</p>
                                            <span class="position">Pendaki Gunung</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Snorkeling di Lava Pahoehoe Sulamadaha dengan pasir hitam
                                        vulkaniknya memberi pengalaman geowisata bahari yang berbeda dari destinasi
                                        lain.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url('{{ asset('frontend/images/person_1.jpg') }}')">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Siti Nurhaliza</p>
                                            <span class="position">Wisatawan Domestik</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="star">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-4">Sebagai peneliti, saya sangat terkesan dengan potensi edukasi
                                        geologi di seluruh 19 geosite Ternate untuk menuju UNESCO Global Geopark.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                            style="background-image: url('{{ asset('frontend/images/person_2.jpg') }}')">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Dr. Hasan Ali</p>
                                            <span class="position">Peneliti Geologi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


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

    <footer class="ftco-footer bg-bottom ftco-no-pt"
        style="background-image: url('{{ asset('frontend/gambar/bg2.png') }}');">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md pt-5">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Tentang</h2>
                        <p>Ternate Geopark mengangkat warisan geologi Gunung Gamalama dan kekayaan budaya Kesultanan
                            Ternate sebagai destinasi geowisata unggulan Maluku Utara.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Informasi</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/tentang-kami') }}" class="py-2 d-block">Tentang Kami</a></li>
                            <li><a href="{{ url('/warisan-bumi') }}" class="py-2 d-block">Warisan Bumi</a></li>
                            <li><a href="{{ url('/coe') }}" class="py-2 d-block">COE</a></li>
                            <li><a href="{{ url('/mitra-geopark') }}" class="py-2 d-block">Mitra Geopark</a></li>
                            <li><a href="{{ url('/unduh') }}" class="py-2 d-block">Unduh</a></li>
                            <li><a href="{{ url('/berita-dan-informasi') }}" class="py-2 d-block">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Pengalaman</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Pendakian Gamalama</a></li>
                            <li><a href="#" class="py-2 d-block">Geowisata Batu Angus</a></li>
                            <li><a href="#" class="py-2 d-block">Pantai & Bahari</a></li>
                            <li><a href="#" class="py-2 d-block">Danau Vulkanik</a></li>
                            <li><a href="#" class="py-2 d-block">Wisata Budaya</a></li>
                            <li><a href="#" class="py-2 d-block">Kuliner Rempah</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md pt-5 border-left">
                    <div class="ftco-footer-widget pt-md-5 mb-4">
                        <h2 class="ftco-heading-2">Ada Pertanyaan?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">Kota Ternate,
                                        Maluku Utara, Indonesia</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+62
                                            921 000 0000</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                            class="text">info@ternategeopark.id</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Hak Cipta &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Ternate Geopark. Seluruh hak dilindungi.
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollax.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    <script src="{{ asset('frontend/js/google-map.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>


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
</body>

</html>
