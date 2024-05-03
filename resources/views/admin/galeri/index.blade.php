@extends('admin.layouts.layouts')

@section('content')


    <section style="">
        <div class="container col-xxl-8 py-5">
            <h4 class="fw-bold mb-3 text-dark">Management Kegiatan</h4>

            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload Kegiatan</a>

            {{-- Pesan Sukses --}}
            @if (session()->has('successKegiatan'))
                <div class="alert alert-success alert-dismissible fade show  gap-3" role="alert">
                    <strong class="me-3">Informasi </strong> <strong class="me-3"> :
                    </strong>{{ session('successKegiatan') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                        data-bs-target=".alert"></button>
                </div>
            @endif

            {{-- manampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert-dismissible fade show gap-3">
                    <ul>
                        @foreach ($erros as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
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

                        @foreach ($kegiatans as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('storage/kegiatan/' . $item->image) }}" height="150"
                                        alt="">
                                </td>
                                <td>
                                    {{ $item->judul }}
                                </td>

                                <td>
                                    <a href="#" class="btn btn-warning" data-bs-target="#editModal{{ $item->id }}"
                                        data-bs-toggle="modal">Edit</a>
                                    <form action="{{ route('kegiatan.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
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
                                            <form action="{{ route('kegiatan.update', $item->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="id_photo" value="{{ $item->id }}">

                                                <div class="form-group mb-3">
                                                    <label for="photo">Pilih Photo</label>
                                                    <div class="col-lg-3">
                                                        <img src="{{ asset('storage/kegiatan/' . $item->image) }}"
                                                            class="mb-3" height="150" alt="">
                                                    </div>
                                                    <input type="file" name="image" class="form-control">

                                                    <input type="hidden" name="old_photo" value="{{ $item->id }}">
                                                </div>



                                                <div class="form-group mb-3">
                                                    <label for="photo">Nama Kegiatan</label>
                                                    <input type="text" name="judul" class="form-control">
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
                    <form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="photo">Photo</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="photo">Nama Kegiatan</label>
                            <input type="text" name="judul" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Fasilitas --}}
    <section style="">
        <div class="container col-xxl-8 py-5">
            <h4 class="fw-bold mb-3 text-dark">Management Fasilitas</h4>

            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#uploadModalFasilitas">Upload
                Fasilitas</a>

            {{-- Pesan Sukses --}}
            @if (session()->has('successFasilitas'))
                <div class="alert alert-success alert-dismissible fade show  gap-3" role="alert">
                    <strong class="me-3">Informasi </strong> <strong class="me-3"> :
                    </strong>{{ session('successFasilitas') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                        data-bs-target=".alert"></button>
                </div>
            @endif

            {{-- manampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert-dismissible fade show gap-3">
                    <ul>
                        @foreach ($erros as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
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

                        @foreach ($fasilitas as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('storage/fasilitas/' . $item->image) }}" height="150"
                                        alt="">
                                </td>
                                <td>
                                    {{ $item->judul }}
                                </td>

                                <td>
                                    <a href="#" class="btn btn-warning"
                                        data-bs-target="#editModal{{ $item->id }}" data-bs-toggle="modal">Edit</a>
                                    <form action="{{ route('fasilitas.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
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
                                            <h5 class="modal-title" id="editModal{{ $item->id }}Label">Modal Edit
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{ route('fasilitas.update', $item->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="id_photo" value="{{ $item->id }}">

                                                <div class="form-group mb-3">
                                                    <label for="photo">Pilih Photo</label>
                                                    <div class="col-lg-3">
                                                        <img src="{{ asset('storage/fasilitas/' . $item->image) }}"
                                                            class="mb-3" height="150" alt="">
                                                    </div>
                                                    <input type="file" name="image" class="form-control">

                                                    <input type="hidden" name="old_photo" value="{{ $item->id }}">
                                                </div>



                                                <div class="form-group mb-3">
                                                    <label for="photo">Nama Kegiatan</label>
                                                    <input type="text" name="judul" class="form-control">
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
    <div class="modal fade" id="uploadModalFasilitas" tabindex="-1" aria-labelledby="uploadModalFasilitasLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalFasilitasLabel">Modal Upload</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="photo">Photo</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="photo">Nama Kegiatan</label>
                            <input type="text" name="judul" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection
