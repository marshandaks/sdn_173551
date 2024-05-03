@extends('layouts.layouts')

@section('content')
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Tenaga Kerja</h2>
            </div>

            <div class="row gy-4">

                @foreach ($tenagaKerjas as $item)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset('storage/tenagaKerja/' . $item->image) }}" class="img-fluid" alt="">
                            <h4>{{ $item->nama }}</h4>
                            <span>{{ $item->jabatan }}</span>
                            <div class="social">
                                <table class="table">

                                    <tbody class="text-start">

                                        <tr>
                                            <th scope="row">Tempat Lahir</th>
                                            <td>{{ $item->tanggal_lahir }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Wali Kelas</th>
                                            <td colspan="2">{{ $item->wali_kelas }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nomor Hp</th>
                                            <td colspan="2">{{ $item->no_telpon }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach


            </div>

        </div>
    </section><!-- End Our Team Section -->
@endsection
