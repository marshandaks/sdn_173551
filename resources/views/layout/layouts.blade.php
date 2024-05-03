<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.png') }}">
    <title>schoolSDN</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Magnific --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">

    {{-- Summernote CSS di antara Head --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />


</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    @yield('content')
    {{-- Footer --}}
    <section id="footer" class="bg-white" data-aos="zoom-out">
        <div class="container py-4">
            <footer>
                <div class="row">
                    {{-- kolom Navigation --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">beranda</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">visi misi
                                        Sekolah</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">sejarah
                                        sekolah
                                        Sekolah</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">prestasi
                                        sekolah</a></li>
                            </ul>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Galery
                                        Sekolah</a></li>
                                <li class="nav-item mb-2"><a href=""
                                        class="nav-link p-0 text-muted">pengumuman</a></li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">saran</a>
                                </li>
                                <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- Kolom Media Sosial --}}
                    <div class="col-12 col-md-3">
                        <h5 class="fw-bold mb-3">Follow kami</h5>
                        <div class="d-flex mb-3">
                            <a href="https://web.facebook.com/profile.php?id=61550948318433" target="_blank"
                                class="text-decoration-none text-dark">
                                <img src="{{ asset('images/fb.jpeg') }}" alt="Facebook Profile" height="30"
                                    width="30">
                            </a>
                        </div>
                    </div>
                    {{-- Kolom Kontak --}}
                    <div class="col-12 col-md-3">
                        <h5 class=" font-inter fw-bold mb-3">Kontak kami</h5>
                        <ul class="nav flex-column me-5">
                            <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted"></a></li>
                            <li class="nav-item mb-2"><a href=""
                                    class="nav-link p-0 text-muted">+6285360507820</a>
                            </li>
                        </ul>
                    </div>
                    {{-- Kolom Alamat --}}
                    <div class="col-12 col-md-3">
                        <h5 class=" font-inter fw-bold mb-3">Alamat Sekolah</h5>
                        <p>Jln. Ahmad Yani , Desa Pasar Lagubotu, Kec. Laguboti, Kab. Toba, Prov. Sumatera
                            Utara</p>
                    </div>
                </div>
            </footer>
        </div>
    </section>
    {{-- Footer --}}


    {{-- Footer --}}

    <section class="bg-light border-top">
        <div class="container py-4">
            <div class="d-flex justify-content-between">
                <div>
                    SDN 1 Kulauh Hulu
                </div>
                <div class="d-flex">
                    <p class="me-4">Syarat Ketentuan</p>
                    <p>
                        <a href="/kebijakan" class="text-decoration-none text-dark">Kebijakan Privasi</a>
                    </p>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });

        const navbar = document.querySelector('.fixed-top');
        if (navbar) {
            window.onscroll = () => {
                if (window.scrollY > 100) {
                    navbar.classList.add('scroll-nav-active');
                    navbar.classList.remove('navbar-dark');
                } else {
                    navbar.classList.remove('scroll-nav-active');
                    // navbar.classList.add('navbar-dark');
                }
            };
        }

        // Animasi AOS ->> animasi ketika di scroll
        AOS.init();

        // Magnific ->> meperbesar gambar
        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '@2x' + m;
                        });
                    }
                }
            });
        });

        $(document).ready(function() {
            // Saat tombol close diklik
            $('.alert button.close').on('click', function() {
                // Sembunyikan alert
                $(this).closest('.alert').hide();
            });
        });
    </script>

</body>

</html>
