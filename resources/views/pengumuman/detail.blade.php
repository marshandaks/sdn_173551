@extends('layouts.layouts')

@section('content')
    <div class="breadcrumbs">

        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/pengumuman">Pengumuman</a></li>
                    <li>{{ $artikel->judul }}</li>

                </ol>
            </div>
        </nav>
    </div>
    <section class="py-5" id="detail">
        <div class="container col-xxl-8 py-5">
            <img class="img-fluid mb-3" src="{{ asset('storage/pengumuman/' . $artikel->image) }}" alt="">
            <div class="konten-pengumuman">
                <p class="mb-3 text-secondary">21/04/2023</p>
                <h4 class="fw-bold mb-3 text-dark">{{ $artikel->judul }}</h4>
                <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
        </div>
    </section>
@endsection
