@extends('admin.layouts.layouts')

@section('content')
    <section style="">
        <div class="container col-xxl-8 py-5">
            <div>
                <h3 class="fw-bold mb-3" style="">Dashboard Admin</h3>
            </div>
            <p class="fw-bold mb-2">Selamat Datang dihalaman Dashboard Admin</p>

            <div class="row">
                {{-- VisiMisi --}}
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0" style="width: 20rem;">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="card-img-top rounded-3"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Visi Misi</h5>
                            <p class="card-text">Atur dan kelola Visi Misi sekolah</p>
                            <a href="{{ route('visimisis') }}" class="btn btn-primary">detail</a>
                        </div>
                    </div>
                </div>

                {{-- Sejarah --}}
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0" style="width: 20rem;">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="card-img-top rounded-3"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sejarah</h5>
                            <p class="card-text">Atur dan kelola sejarah sekolah</p>
                            <a href="{{ route('atursejarah') }}" class="btn btn-primary">detail</a>
                        </div>
                    </div>
                </div>

                {{-- kontak --}}
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0" style="width: 20rem;">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="card-img-top rounded-3"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kontak</h5>
                            <p class="card-text">Atur dan kelola kontak sekolah</p>
                            <a href="{{ route('kontakDashboard') }}" class="btn btn-primary">detail</a>
                        </div>
                    </div>
                </div>

                {{-- Galeri --}}
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0" style="width: 20rem;">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="card-img-top rounded-3"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Galeri</h5>
                            <p class="card-text">Atur dan kelola galeri sekolah</p>
                            <a href="{{ route('galeriDashboard') }}" class="btn btn-primary">detail</a>

                        </div>
                    </div>
                </div>

                {{-- Saran --}}
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0" style="width: 20rem;">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="card-img-top rounded-3"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Saran</h5>
                            <p class="card-text">Atur dan kelola saran</p>
                            <a href="{{ route('saranDashboard') }}" class="btn btn-primary">detail</a>
                        </div>
                    </div>
                </div>

                {{-- Pengumuman --}}
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0" style="width: 20rem;">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="card-img-top rounded-3"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pengumuman</h5>
                            <p class="card-text">Atur dan kelola Pengumuman sekolah</p>
                            <a href="{{ route('pengumumanDashboard') }}" class="btn btn-primary">detail</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0" style="width: 20rem;">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="card-img-top rounded-3"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Prestasi</h5>
                            <p class="card-text">Atur dan kelola prestasi sekolah</p>
                            <a href="{{ route('prestasiDashboard') }}" class="btn btn-primary">detail</a>
                        </div>
                    </div>
                </div>

                {{-- Tenaga Kerja --}}
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0" style="width: 20rem;">
                        <img src="{{ asset('assets/images/il-photo-02.png') }}" class="card-img-top rounded-3"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tenaga Kerja</h5>
                            <p class="card-text">Atur dan kelola tenaga kerja sekolah</p>
                            <a href="{{ route('tenagaKerjaDashboard') }}" class="btn btn-primary">detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
