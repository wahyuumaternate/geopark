<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <a href="#!" class="logo d-flex align-items-center text-decoration-none">
                <span class="fs-4 fw-bold ">
                    GEOPARK <span class="text-dark">TERNATE</span>
                </span>
            </a>
        </div>

        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <!-- Website -->
            <li class="nav-item">
                <a class="nav-link nav-icon d-flex align-items-center" target="_blank" href="/"
                    title="Lihat Website">
                    <i class="bi bi-globe me-1"></i>
                </a>
            </li>

            <!-- Profile -->
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#!" data-bs-toggle="dropdown">

                    <i class="bi bi-person-circle fs-4"></i>

                    <span class="d-none d-md-block dropdown-toggle ps-2">
                        {{ Auth::user()->name }}
                    </span>

                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                    <li class="dropdown-header">
                        <h6>{{ Auth::user()->name }}</h6>
                        <span>{{ Auth::user()->email }}</span>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#!">
                            <i class="bi bi-person"></i>
                            <span>Profil Saya</span>
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit"
                                class="dropdown-item d-flex align-items-center border-0 bg-transparent w-100">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>

                </ul>

            </li>

        </ul>
    </nav>

</header>
