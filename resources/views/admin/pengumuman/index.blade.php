@extends('admin.layouts.layouts')

@section('content')
    <section style="">
        <div class="container col-xxl-8 py-5">
            <h4 class="fw-bold mb-3">Management Pengumuman</h4>

            <a href="{{ route('pengumumanDashboard.create') }}" class="btn btn-primary mb-3">Buat Pengumuman</a>

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
                            <th>#</th>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pengumuman as $artikel)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ asset('storage/pengumuman/' . $artikel->image) }}" height="100"
                                        alt="">
                                </td>
                                <td>{{ $artikel->judul }}</td>
                                <td>
                                    <a href="{{ route('pengumumanDashboard.edit', $artikel->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form action="{{ route('pengumumanDashboard.destroy', $artikel->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <button type="submit" onclick="alert('Apakah yakin dihapus?')"
                                            class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </section>
@endsection
