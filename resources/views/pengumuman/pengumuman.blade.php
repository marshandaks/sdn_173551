@extends('layouts.layouts')

@section('content')
    <!-- ======= Pengumuman Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Pengumuman Sekolah</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 portfolio-container">
                    @foreach ($pengumumans as $item)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('storage/pengumuman/' . $item->image) }}"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('storage/pengumuman/' . $item->image) }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a title="More Details">{{ $item->judul }}</a>
                                    </h4>
                                    <p><a href="/pengumuman/{{ $item->slug }}">Baca selengkapnya...</a></p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->
            </div>

        </div>
    </section><!-- End Pengumuman Section -->
@endsection
