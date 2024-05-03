@extends('layouts.layouts')

@section('content')
    <!-- ======= Prestasi Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Prestasi Sekolah</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 portfolio-container">
                    @foreach ($prestasis as $item)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('storage/prestasi/' . $item->image) }}"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('storage/prestasi/' . $item->image) }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a title="More Details">{{ $item->judul }}</a>
                                    </h4>
                                    <p><a href="/prestasi/{{ $item->slug }}">Baca selengkapnya...</a></p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->
            </div>

        </div>
    </section><!-- End prestasi Section -->
@endsection
