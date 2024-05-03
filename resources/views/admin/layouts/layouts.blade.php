<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- Sidebar --}}
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="dashboard" class="brand-link d-flex justify-content-center ">
                <img src="{{ asset('assets/icons/ic-logo.png') }}" height="45" alt="">
                <span class="brand-text font-weight-light d-flex align-content-center flex-wrap pl-2">
                    schoolSDN</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="visimisis" class="nav-link">
                                <i class="nav-icon fas fa-info"></i>
                                <p>
                                    Visi Misi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="atursejarah" class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    Sejarah
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="kontakDashboard" class="nav-link">
                                <i class="nav-icon fas fa-phone"></i>
                                <p>
                                    Kontak
                                </p>
                            </a>
                        </li>
                        <!-- Move other links here -->
                        <li class="nav-item">
                            <a href="pengumumanDashboard" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Pengumuman
                                </p>
                            </a>
                        </li>
                        </li>
                        <!-- Move other links here -->
                        <li class="nav-item">
                            <a href="prestasiDashboard" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Prestasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="saranDashboard" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    Saran
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="galeriDashboard" class="nav-link">
                                <i class="nav-icon fas fa-images"></i>
                                <p>
                                    Galeri
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tenagaKerjaDashboard" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Tenaga Kerja
                                </p>
                            </a>
                        </li>

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
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        {{-- Content --}}
        <div class="content-wrapper">
            @yield('content')
        </div>

    </div>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="{{ asset('assets/js/magnific.js') }}"></script>

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
    </script>

</body>

</html>
