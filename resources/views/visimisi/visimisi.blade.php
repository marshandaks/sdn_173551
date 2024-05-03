@extends('layouts.layouts')

@section('content')
    <section id="berita">
        <br>
        <div class="container">

            <div class="header-berita text-center">
                <div class="section-header">
                    <h2>Visi Sekolah</h2>
                </div>
                @foreach ($visi as $visi)
                    <h5 class="">"
                        {{ $visi->visi }}"
                    </h5>
                @endforeach
                <div class="py-5 section-header">
                    <h2>Misi Sekolah</h2>
                </div>

                <div class="text-start ">
                    <ul class="px-5">
                        @foreach ($misi as $misi)
                            <li>
                                <h5>{{ $misi->misi }}</h5>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>
    </section>
@endsection
