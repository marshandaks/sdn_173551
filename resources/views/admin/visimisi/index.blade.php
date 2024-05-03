@extends('admin.layouts.layouts')

@section('content')
    {{-- Visi --}}
    <section style="">
        <div class="container col-xxl-8 py-5">
            <h4 class="fw-bold mb-3">Management Visi</h4>

            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload Visi</a>

            {{-- Pesan Sukses --}}
            @if (session()->has('successVisi'))
                <div class="alert alert-success alert-dismissible fade show  gap-3" role="alert">
                    <strong class="me-3">Informasi </strong> <strong class="me-3"> : </strong>{{ session('successVisi') }}
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
                            <th>Visi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($visi as $item)
                            <tr>
                                <td>{{ $no++ }}</td>

                                <td>
                                    {{ $item->visi }}
                                </td>

                                <td>
                                    <a href="#" class="btn btn-warning" data-bs-target="#editModal{{ $item->id }}"
                                        data-bs-toggle="modal">Edit</a>
                                    <form action="{{ route('visi.destroy', $item->id) }}" method="POST" class="d-inline">
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
                                            <form action="{{ route('visi.update', $item->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="id_visi" value="{{ $item->id }}">

                                                <div class="form-group mb-3">
                                                    <label for="visi">Pilih visi</label>


                                                    <input type="hidden" name="old_visi" value="{{ $item->id }}">
                                                </div>



                                                <div class="form-group mb-3">
                                                    <label for="visi">Nama Kegiatan</label>
                                                    <input type="text" name="visi" class="form-control">
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
                    <form action="{{ route('visi.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="visi">Nama Kegiatan</label>
                            <input type="text" name="visi" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- Misi --}}
    <section>
        <div class="container col-xxl-8 py-5">
            <h4 class="fw-bold mb-3">Management misi</h4>

            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#uploadModalMisi">Upload misi</a>

            {{-- Pesan Sukses --}}
            @if (session()->has('successMisi'))
                <div class="alert alert-success alert-dismissible fade show  gap-3" role="alert">
                    <strong class="me-3">Informasi </strong> <strong class="me-3"> :
                    </strong>{{ session('successMisi') }}
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
                            <th>misi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($misi as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    {{ $item->misi }}
                                </td>

                                <td>
                                    <a href="#" class="btn btn-warning"
                                        data-bs-target="#editModalMisi{{ $item->id }}"
                                        data-bs-toggle="modal">Edit</a>
                                    <form action="{{ route('misi.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        <button type="submit" onclick="alert('Apakah yakin dihapus?')"
                                            class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModalMisi{{ $item->id }}" tabindex="-1"
                                aria-labelledby="editModalMisi{{ $item->id }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalMisi{{ $item->id }}Label">Modal Edit
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{ route('misi.update', $item->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="id_misi" value="{{ $item->id }}">

                                                <div class="form-group mb-3">
                                                    <label for="misi">Pilih misi</label>

                                                    <input type="hidden" name="old_misi" value="{{ $item->id }}">
                                                </div>



                                                <div class="form-group mb-3">
                                                    <label for="misi">Nama Kegiatan</label>
                                                    <input type="text" name="misi" class="form-control">
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
    <div class="modal fade" id="uploadModalMisi" tabindex="-1" aria-labelledby="uploadModalMisiLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalMisiLabel">Modal Upload</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('misi.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="misi">Nama Kegiatan</label>
                            <input type="text" name="misi" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
