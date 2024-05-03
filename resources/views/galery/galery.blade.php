@extends('layouts.layouts')

@section('content')
    <!-- ======= Kegiatan Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Kegiatan Sekolah</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 portfolio-container">
                    @foreach ($kegiatans as $item)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('storage/kegiatan/' . $item->image) }}"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('storage/kegiatan/' . $item->image) }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a title="More Details">{{ $item->judul }}</a></h4>
                                    {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->
            </div>

        </div>
    </section><!-- End Kegiatan Section -->

    <!-- ======= Fasilitas Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Fasilitas Sekolah</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 portfolio-container">
                    @foreach ($fasilitas as $item)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('storage/fasilitas/' . $item->image) }}"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('storage/fasilitas/' . $item->image) }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a title="More Details">{{ $item->judul }}</a></h4>
                                    {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->

            </div>
        </div>
    </section><!-- End Fasilitas Section -->
@endsection
