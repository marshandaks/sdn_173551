@extends('admin.layouts.layouts')

@section('content')
    <section style="">
        <div class="container col-xxl-8 py-5">
            <h4 class="fw-bold mb-3">Management Sejarah</h4>
            @foreach ($artikels as $artikel)
                <a href="{{ route('atursejarah.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
            @endforeach

            {{-- Pesan Sukses --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show  gap-3" role="alert">
                    <strong class="me-3">Informasi </strong> <strong class="me-3"> : </strong>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                        data-bs-target=".alert"></button>
                </div>
            @endif


            <div class="table-responsive py-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Deskripsi Sejarah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikels as $artikel)
                            <tr>
                                <td style="white-space: normal;">
                                    {!! $artikel->desc !!}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </section>
@endsection
