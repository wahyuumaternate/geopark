<!DOCTYPE html>
<html lang="en">

<head>
    {{-- =========================
         BASIC SEO
    ========================== --}}
    <title>@yield('title', 'Geopark Ternate | Warisan Geologi, Alam & Budaya Ternate')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description"
        content="@yield('meta_description', 'Geopark Ternate merupakan kawasan yang memiliki kekayaan warisan geologi, keanekaragaman hayati, dan warisan budaya. Jelajahi geosite, geowisata, edukasi, konservasi, dan potensi masyarakat Ternate.')">

    <meta name="keywords"
        content="@yield('meta_keywords', 'Geopark Ternate, Geopark Maluku Utara, Geowisata Ternate, Gunung Gamalama, geosite Ternate, warisan geologi Ternate, wisata Ternate, pariwisata Ternate')">

    <meta name="author" content="Geopark Ternate">

    <meta name="robots" content="index, follow, max-image-preview:large">

    <meta name="language" content="id">

    <meta name="revisit-after" content="7 days">

    {{-- Canonical --}}
    <link rel="canonical" href="@yield('canonical', url('/'))">

    {{-- =========================
         FAVICON
    ========================== --}}
    <link rel="icon" type="image/png" href="{{ asset('frontend/gambar/logo1.png') }}">

    <link rel="apple-touch-icon" href="{{ asset('frontend/gambar/logo1.png') }}">

    {{-- =========================
         OPEN GRAPH / FACEBOOK
    ========================== --}}
    <meta property="og:type" content="website">

    <meta property="og:title" content="@yield('og_title', 'Geopark Ternate | Warisan Geologi, Alam & Budaya')">

    <meta property="og:description"
        content="@yield('og_description', 'Jelajahi kekayaan geologi, keanekaragaman hayati, budaya, dan destinasi geowisata Geopark Ternate.')">

    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:site_name" content="Geopark Ternate">

    <meta property="og:locale" content="id_ID">

    <meta property="og:image" content="@yield('og_image', asset('frontend/gambar/logo1.png'))">

    <meta property="og:image:alt" content="Logo Geopark Ternate">

    {{-- =========================
         TWITTER / X
    ========================== --}}
    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="@yield('og_title', 'Geopark Ternate | Warisan Geologi, Alam & Budaya')">

    <meta name="twitter:description"
        content="@yield('og_description', 'Informasi Geopark Ternate mengenai warisan geologi, geosite, geowisata, keanekaragaman hayati, budaya, edukasi, dan konservasi.')">

    <meta name="twitter:image" content="@yield('og_image', asset('frontend/gambar/logo1.png'))">

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
         SHARED CUSTOM CSS
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
    </style>

    {{-- Slot untuk CSS tambahan khusus per halaman --}}
    @stack('styles')
</head>

<body>

    @include('partials.navbar')
    <!-- END nav -->

    @yield('content')

    @include('partials.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>

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

    {{-- Slot untuk script tambahan khusus per halaman --}}
    @stack('scripts')
</body>

</html>