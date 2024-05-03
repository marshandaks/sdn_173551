@extends('layouts.layouts')

@section('content')
    <section id="berita">
        <div class="container py-5">

            <div class="section-header">
                <h2 class="fw-bold mb-5">Kontak</h2>
            </div>


            <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                    <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 d-flex flex-column text-start" data-aos="fade-up">
                    <table class="table table-borderless">
                        <tbody>
                            @foreach ($kontak as $item)
                                <tr>
                                    <th scope="row">{{ $item->mediasosial }}</th>
                                    <th>:</th>
                                    <td>{{ $item->akun }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- Features Item -->

            <div class="header-berita mt-5 text-center">

                <div class=" py-5 section-header">
                    <h2>Lokasi</h2>
                    <p>Jln. Ahmad Yani , Desa Pasar Lagubotu
                        Kec. Laguboti, Kab. Toba
                        Prov. Sumatera Utara</p>
                </div>

                <div class="text-start">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.455279160687!2d99.1262556!3d2.3526519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e01351fca506d%3A0xccbff9f0e196cc1!2sJl.%20Jenderal%20Ahmad%20Yani%2C%20Ps.%20Laguboti%2C%20Kec.%20Laguboti%2C%20Toba%2C%20Sumatera%20Utara%2022381!5e0!3m2!1sid!2sid!4v1714311405013!5m2!1sid!2sid"
                        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </section>
@endsection
