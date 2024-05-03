@extends('admin.layouts.layouts')

@section('content')
    {{-- kontak --}}
    <section style="">
        <div class="container col-xxl-8 py-5">
            <h4 class="fw-bold mb-3">Management kontak</h4>

            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload kontak</a>

            {{-- Pesan Sukses --}}
            @if (session()->has('successkontak'))
                <div class="alert alert-success alert-dismissible fade show  gap-3" role="alert">
                    <strong class="me-3">Informasi </strong> <strong class="me-3"> :
                    </strong>{{ session('successkontak') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                        data-bs-target=".alert"></button>
                </div>
            @endif

            {{-- manampilkan error validasi --}}
            {{-- @if (count($errors) > 0)
                <div class="alert-dismissible fade show gap-3">
                    <ul>
                        @foreach ($erros as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                        data-bs-target=".alert"></button>
                </div>
            @endif --}}


            <div class="table-responsive py-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Media Sosial</th>
                            <th>Akun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($kontak as $item)
                            <tr>
                                <td>{{ $no++ }}</td>

                                <td>
                                    {{ $item->mediasosial }}
                                </td>
                                <td>
                                    {{ $item->akun }}
                                </td>

                                <td>
                                    <a href="#" class="btn btn-warning" data-bs-target="#editModal{{ $item->id }}"
                                        data-bs-toggle="modal">Edit</a>
                                    <form action="{{ route('kontak.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" onclick="alert('Apakah yakin dihapus?')"
                                            class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="editModal{{ $item->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModal{{ $item->id }}Label">Modal Edit</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{ route('kontak.update', $item->id) }}" method="POST">
                                                @csrf

                                                <input type="hidden" name="id_kontak" value="{{ $item->id }}">

                                                <div class="form-group mb-3">
                                                    <input type="hidden" name="old_kontak" value="{{ $item->id }}">
                                                </div>



                                                <div class="form-group mb-3">
                                                    <label for="mediasosial">Media Sosial</label>
                                                    <input type="text" name="mediasosial" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="akun">Nama Akun</label>
                                                    <input type="text" name="akun" class="form-control">
                                                </div>

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Modal Upload -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Modal Upload</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('kontak.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="mediasosial">Media Sosial</label>
                            <input type="text" name="mediasosial" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="akun">Nama Akun</label>
                            <input type="text" name="akun" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
