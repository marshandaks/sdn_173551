@extends('admin.layouts.layouts')

@section('content')
    <section style="">
        <div class="container col-xxl-8 py-5">
            <h4 class="fw-bold mb-3">Management Tenaga Kerja</h4>

            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload Tenaga Kerja</a>

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
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Wali Kelas</th>
                            <th>Tanggal Lahir</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($tenagaKerjas as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('storage/tenagaKerja/' . $item->image) }}" height="150"
                                        alt="">
                                </td>
                                <td>
                                    {{ $item->nama }}
                                </td>
                                <td>
                                    {{ $item->jabatan }}
                                </td>
                                <td>
                                    {{ $item->wali_kelas }}
                                </td>
                                <td>
                                    {{ $item->tanggal_lahir }}
                                </td>
                                <td>
                                    {{ $item->no_telpon }}
                                </td>

                                <td>
                                    <a href="#" class="btn btn-warning" data-bs-target="#editModal{{ $item->id }}"
                                        data-bs-toggle="modal">Edit</a>
                                    <form action="{{ route('tenagaKerja.destroy', $item->id) }}" method="POST"
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
                                            <form action="{{ route('tenagaKerja.update', $item->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <input type="hidden" name="id_tenagaKerja" value="{{ $item->id }}">

                                                <div class="form-group mb-3">
                                                    <label for="tenagaKerja">Pilih tenagaKerja</label>
                                                    <div class="col-lg-3">
                                                        <img src="{{ asset('storage/tenagaKerja/' . $item->image) }}"
                                                            class="mb-3" height="150" alt="">
                                                    </div>
                                                    <input type="file" name="image" class="form-control">

                                                    <input type="hidden" name="old_tenagaKerja"
                                                        value="{{ $item->id }}">
                                                </div>



                                                <div class="form-group mb-3">
                                                    <label for="tenagaKerja">Nama Kegiatan</label>
                                                    <input type="text" name="nama" class="form-control">
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
                    <form action="{{ route('tenagaKerja.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="tenagaKerja">tenagaKerja</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="tenagaKerja">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="tenagaKerja">jabatan</label>
                            <input type="text" name="jabatan" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="tenagaKerja">wali_kelas</label>
                            <input type="text" name="wali_kelas" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="tenagaKerja">tanggal_lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="tenagaKerja">no_telpon</label>
                            <input type="text" name="no_telpon" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
