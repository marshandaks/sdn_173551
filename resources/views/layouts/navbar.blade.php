<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <img src="{{ asset('assets/icons/ic-logo.png') }}" width="45" alt="">
            <h1 style="font-size:24px">SDN<span>173551</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="dropdown"><a href="#"><span>Profile</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('visimisi') }}">Visi Misi</a></li>
                        <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                        <li><a href="{{ route('prestasi') }}">Prestasi</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('galeri') }}">Galery</a></li>
                <li><a href="{{ route('tenagaKerja') }}">Tenaga Kerja</a></li>
                <li><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
                <li><a href="{{ route('saran') }}">Saran</a></li>
                <li><a href="{{ route('kontak') }}">Kontak</a></li>
            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
