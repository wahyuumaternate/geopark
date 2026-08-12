<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Warisan Bumi -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#warisan-nav" data-bs-toggle="collapse" href="#!">
                <i class="bi bi-geo-alt-fill"></i>
                <span>Warisan Bumi</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="warisan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ url('/warisan-bumi/geologi') }}">
                        <i class="bi bi-circle"></i>
                        <span>Geologi</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/warisan-bumi/biologi') }}">
                        <i class="bi bi-circle"></i>
                        <span>Biologi</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/warisan-bumi/budaya') }}">
                        <i class="bi bi-circle"></i>
                        <span>Budaya</span>
                    </a>
                </li>

            </ul>
        </li>

        <!-- Informasi -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#info-nav" data-bs-toggle="collapse" href="#!">
                <i class="bi bi-newspaper"></i>
                <span>Informasi</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="info-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ url('/berita') }}">
                        <i class="bi bi-circle"></i>
                        <span>Berita</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/events') }}">
                        <i class="bi bi-circle"></i>
                        <span>Events</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/youth-forum') }}">
                        <i class="bi bi-circle"></i>
                        <span>Youth Forum</span>
                    </a>
                </li>

            </ul>
        </li>

        <!-- Publikasi -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#unduh-nav" data-bs-toggle="collapse" href="#!">
                <i class="bi bi-download"></i>
                <span>Unduh</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="unduh-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ url('/unduh/publikasi') }}">
                        <i class="bi bi-circle"></i>
                        <span>Publikasi</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/unduh/peraturan') }}">
                        <i class="bi bi-circle"></i>
                        <span>Peraturan</span>
                    </a>
                </li>

            </ul>
        </li>

        <!-- Lainnya -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/mitra-geopark') }}">
                <i class="bi bi-people-fill"></i>
                <span>Mitra Geopark</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/coe') }}">
                <i class="bi bi-building"></i>
                <span>COE</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#!">
                <i class="bi bi-gear"></i>
                <span>Pengaturan</span>
            </a>
        </li>

    </ul>

</aside>