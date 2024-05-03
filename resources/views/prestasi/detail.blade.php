@extends('layouts.layouts')

@section('content')
    <div class="breadcrumbs">

        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/prestasi">Prestasi</a></li>
                    <li>{{ $artikel->judul }}</li>

                </ol>
            </div>
        </nav>
    </div>
    <section id="detail">
        <div class="container col-xxl-8 ">
            <img class="img-fluid mb-3" src="{{ asset('storage/prestasi/' . $artikel->image) }}" alt="">
            <div class="konten-prestasi">
                <h4 class="fw-bold mb-3 text-dark">{{ $artikel->judul }}</h4>
                <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
        </div>
    </section>
@endsection
