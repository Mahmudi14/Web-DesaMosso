<header id="header" class="header d-flex align-items-center fixed-top">
    <div
        class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            {{-- <img src="{{ asset('assets') }}/img/logo.png" alt=""> --}}
            <h1 class="sitename">Mosso Dhua</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }}">
                        Home
                    </a></li>
                <li><a href="{{ route('profil-desa') }}"
                        class="{{ request()->routeIs('profil-desa') ? 'active' : '' }}">
                        Profil Desa
                    </a></li>
                <li><a href="{{ route('info') }}" class="{{ request()->routeIs('info') ? 'active' : '' }}">
                        Info
                    </a></li>
                <li><a href="{{ route('galeri') }}" class="{{ request()->routeIs('galeri') ? 'active' : '' }}">
                        Galeri
                    </a></li>
                {{-- <li><a href="#pricing">Pricing</a></li>
                <li><a href="#contact">Contact</a></li> --}}
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="">Get Started</a>

    </div>
</header>