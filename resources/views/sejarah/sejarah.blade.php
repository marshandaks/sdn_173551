@extends('layouts.layouts')

@section('content')
    @foreach ($sejarah as $item)
        <section id="berita">
            <div class="container ">

                <div class="section-header">
                    <h2 class="fw-bold mb-5">Sejarah Sekolah</h2>
                </div>
                <div class="konten-berita">

                    <p class="text-secondary">{!! $item->desc !!}</p>
                </div>
            </div>
        </section>
    @endforeach
@endsection
