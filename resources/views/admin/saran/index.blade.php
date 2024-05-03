@extends('admin.layouts.layouts')

@section('content')
    <section style="">
        <div class="container col-xxl-8 py-5">
            <h4 class="fw-bold mb-3">Management Saran</h4>



            {{-- Pesan Sukses --}}
            @if (session()->has('success'))
                <div id="successAlert" class="alert alert-success alert-dismissible fade show gap-3" role="alert">
                    <strong class="me-3">Informasi </strong> <strong class="me-3"> : </strong>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"
                        data-bs-target="#successAlert"></button>
                </div>
            @endif


            <div class="table-responsive py-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Saran</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($saran as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nomortelepon }}</td>
                                <td>{{ $item->saran }}</td>
                                <td>
                                    <form action="{{ route('saran.destroy', $item->id) }}" method="POST" class="d-inline">
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
