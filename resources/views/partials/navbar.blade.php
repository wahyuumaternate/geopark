<nav class="navbar navbar-expand-lg navbar-light bg-white ftco-navbar-light" id="ftco-navbar">
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
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}" class="nav-link">
                        Beranda
                    </a>
                </li>

                {{-- Tentang Kami --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="tentangDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Tentang
                    </a>

                    <div class="dropdown-menu" aria-labelledby="tentangDropdown">
                        <a class="dropdown-item" href="{{ url('/tentang-kami') }}">
                            Maksud & Tujuan
                        </a>

                        <a class="dropdown-item" href="{{ url('/pengelola') }}">
                            Tentang
                        </a>
                    </div>
                </li>

                {{-- Warisan Bumi --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="warisanDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
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
                <li class="nav-item">
                    <a href="{{ url('/berita') }}" class="nav-link">
                        Berita
                    </a>
                </li>

                {{-- Events --}}
                <li class="nav-item">
                    <a href="{{ url('/events') }}" class="nav-link">
                        Events
                    </a>
                </li>

                {{-- Unduh --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="unduhDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Unduh
                    </a>

                    <div class="dropdown-menu" aria-labelledby="unduhDropdown">
                        {{-- <a class="dropdown-item" href="{{ url('/unduh') }}">
                            Dokumen
                        </a> --}}

                        <a class="dropdown-item" href="{{ url('/unduh/publikasi') }}">
                            Publikasi
                        </a>

                        <a class="dropdown-item" href="{{ url('/unduh/peraturan') }}">
                            Peraturan
                        </a>
                    </div>
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
