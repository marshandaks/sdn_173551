@extends('admin.layouts.layouts')

@section('content')
    <section style="">
        <div class="container col-xxl-8 py-5">
            {{-- Navigasi --}}
            <div class="d-flex">
                <a href="{{ route('atursejarah') }}">Sejarah</a>
                <div class="mx-1">/</div>
                <a href="">Buat Artikel</a>
            </div>


            <h4 class="fw-bold mb-3">Edit Sejarah</h4>
            <form action="{{ route('atursejarah.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="form-group mb-4">
                    <label for="">Artikel berita</label>
                    <textarea name="desc" id="summernote">
                        {!! $artikel->desc !!}
                    </textarea>

                    @error('decs')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </section>
@endsection
