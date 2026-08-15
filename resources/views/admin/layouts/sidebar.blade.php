<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if (auth()->check() && auth()->user()->role === 'admin')
            <!-- Warisan Bumi -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.geologi.*', 'admin.biologi.*', 'admin.budaya.*', 'admin.warisanbumi.*') ? '' : 'collapsed' }}"
                    data-bs-target="#warisan-nav" data-bs-toggle="collapse" href="#!"
                    aria-expanded="{{ request()->routeIs('admin.geologi.*', 'admin.biologi.*', 'admin.budaya.*', 'admin.warisanbumi.*') ? 'true' : 'false' }}">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Warisan Bumi</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>

                <ul id="warisan-nav"
                    class="nav-content collapse {{ request()->routeIs('admin.geologi.*', 'admin.biologi.*', 'admin.budaya.*', 'admin.warisanbumi.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('admin.geologi.index') }}"
                            class="{{ request()->routeIs('admin.geologi.*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i>
                            <span>Geologi</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.biologi.index') }}"
                            class="{{ request()->routeIs('admin.biologi.*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i>
                            <span>Hayati</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.budaya.index') }}"
                            class="{{ request()->routeIs('admin.budaya.*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i>
                            <span>Budaya</span>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- Informasi -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.berita.*', 'admin.youthforum.*', 'admin.informasi.*') ? '' : 'collapsed' }}"
                    data-bs-target="#info-nav" data-bs-toggle="collapse" href="#!"
                    aria-expanded="{{ request()->routeIs('admin.berita.*', 'admin.youthforum.*', 'admin.informasi.*') ? 'true' : 'false' }}">
                    <i class="bi bi-newspaper"></i>
                    <span>Informasi</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>

                <ul id="info-nav"
                    class="nav-content collapse {{ request()->routeIs('admin.berita.*', 'admin.youthforum.*', 'admin.informasi.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('admin.berita.index') }}"
                            class="{{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i>
                            <span>Berita</span>
                        </a>
                    </li>

                    {{-- <li>
                    <a href="{{ url('/events') }}">
                        <i class="bi bi-circle"></i>
                        <span>Events</span>
                    </a>
                </li> --}}

                    <li>
                        <a href="{{ route('admin.youthforum.index') }}"
                            class="{{ request()->routeIs('admin.youthforum.*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i>
                            <span>Youth Forum</span>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- Unduh -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.publikasi.*', 'admin.peraturan.*', 'admin.unduh.*') ? '' : 'collapsed' }}"
                    data-bs-target="#unduh-nav" data-bs-toggle="collapse" href="#!"
                    aria-expanded="{{ request()->routeIs('admin.publikasi.*', 'admin.peraturan.*', 'admin.unduh.*') ? 'true' : 'false' }}">
                    <i class="bi bi-download"></i>
                    <span>Unduh</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>

                <ul id="unduh-nav"
                    class="nav-content collapse {{ request()->routeIs('admin.publikasi.*', 'admin.peraturan.*', 'admin.unduh.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">

                    <li>
                        <a href="{{ route('admin.publikasi.index') }}"
                            class="{{ request()->routeIs('admin.publikasi.*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i>
                            <span>Publikasi</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.peraturan.index') }}"
                            class="{{ request()->routeIs('admin.peraturan.*') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i>
                            <span>Peraturan</span>
                        </a>
                    </li>

                </ul>
            </li>

            <!-- Lainnya -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.users.*') ? '' : 'collapsed' }}"
                    href="{{ route('admin.users.index') }}">
                    <i class="bi bi-people-fill"></i>
                    <span>Users</span>
                </a>
            </li>

            {{-- <li class="nav-item">
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
        </li> --}}
        @else
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.youthforum.*') ? '' : 'collapsed' }}"
                    href="{{ route('admin.youthforum.index') }}">
                    <i class="bi bi-newspaper"></i>
                    <span>Youth Forum</span>
                </a>
            </li>
        @endif
    </ul>

</aside>
