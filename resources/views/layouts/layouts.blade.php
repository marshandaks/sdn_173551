<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Impact Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.cs') }}s" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet') }}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Updated: Apr 4 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">SDN3LAGUBOTI@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span> +6285360507820</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://web.facebook.com/profile.php?id=61550948318433" target="_blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    @yield('content')
    {{-- Footer --}}


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>SDN 173551</span>
                    </a>
                    <p>"Berprestasi Beriman Dan Berbudaya Dengan Displin Yang Tinggi Dalam Lingkungan Sekolah Yang
                        Nyaman"</p>
                    <div class="social-links d-flex mt-4">
                        <a href="https://web.facebook.com/profile.php?id=61550948318433" target="_blank"
                            class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="/login" target="_blank"><i class="bi bi-person-fill"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Navigasi</h4>
                    <ul>
                        <li><a href="#hero" href="/">Home</a></li>
                        <li><a href="{{ route('galeri') }}">Galery</a></li>
                        <li><a href="{{ route('tenagaKerja') }}">Tenaga Kerja</a></li>
                        <li><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
                        <li><a href="{{ route('saran') }}">Saran</a></li>
                        <li><a href="{{ route('kontak') }}">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Alamat</h4>
                    <p>
                        Alamat: <br>
                        Jln. Ahmad Yani , Desa Pasar Lagubotu<br>
                        Kec. Laguboti, Kab. Toba <br>
                        Prov. Sumatera Utara<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak kami</h4>
                    <p>
                        <strong>Phone:</strong> +6285360507820<br>
                        <strong>Email:</strong> SDN3LAGUBOTI@gmail.com<br>
                    </p>

                </div>

            </div>
        </div>


    </footer><!-- End Footer -->
    <!-- End Footer -->

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

    <!-- Vendor JS Files -->
    <script src="asset{('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        // Script untuk menangani penutupan alert success
        $(document).ready(function() {
            // Saat tombol close diklik
            $('.alert button.close').on('click', function() {
                // Sembunyikan alert
                $(this).closest('.alert').hide();
            });
        });
    </script>
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
    <!-- Pastikan jQuery sudah dimuat -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <script>
        // Pastikan dokumen telah dimuat sepenuhnya sebelum mengeksekusi skrip
        $(document).ready(function() {
            // Tangani penutupan alert saat tombol close diklik
            $('#successAlert button.btn-close').on('click', function() {
                $('#successAlert').hide(); // Sembunyikan alert
            });
        });
    </script>


</body>

</html>
