<nav class=" navbar navbar-expand-lg py-3 fixed-top  {{ Request::segment(1) == '' ? '' : ' shadow  ' }}">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/icons/ic-logo.png') }}" height="55" width="55" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active text-nav-active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-nav-active" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink ">
                        <li><a class="dropdown-item" href="{{ route('visimisi') }}">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah Sekolah</a></li>
                        <li><a class="dropdown-item" href="#">Prestasi</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-nav-active" aria-current="page"
                        href="{{ route('berita') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-nav-active" aria-current="page"
                        href="{{ route('tenagakerja') }}">Tenaga Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-nav-active" aria-current="page" href="">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-nav-active" aria-current="page" href="">Saran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-nav-active" aria-current="page"
                        href="{{ route('kontak') }}">Kontak</a>
                </li>


            </ul>
            <div class="d-flex">
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-dark" type="submit">Logout</button>
                    </form>
                @else
                    <a class="btn btn-danger" href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
