@extends('../backenddosen')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4 class="card-title card-title-dash">Ruang Diskusi</h4>
                            {{-- <p class="mb-0">20 finished, 5 remaining</p> --}}
                        </div>
                        <ul class="bullet-line-list">
                            @foreach ($aktifitas as $a)
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div><span class="text-light-green">{{ $a->id_pengguna }},</span> {{ $a->pesan }}
                                        </div>
                                        <p>{{ $a->created_at }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="list align-items-center pt-3">
                            {{-- <div class="wrapper w-100">
                        <p class="mb-0">
                          <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                        </p>
                      </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample material-form" method="POST"
                            action="{{ url('dosen/kelas/kirim/' . $kelas->id) }}">
                            @csrf
                            <div class="form-group">
                                <textarea name="pesan" required="required"></textarea>
                                <label for="textarea" class="control-label">Pesan</label><i class="bar"></i>
                            </div>
                            <div class="button-container">
                                <button type="submit" class="button btn btn-primary"><span>Submit</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if ($kelas->jenis_perkuliahan == 'UJIAN' OR $kelas->jenis_perkuliahan == 'TUGAS' )
        <div class="row flex-grow">
            <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="card-title card-title-dash">Tugas Mahasiswa</h4>
                            </div>
                        </div>
                        <div class="table-responsive  mt-1">
                            <table class="table select-table">
                                <thead>
                                    <tr>
                                        <th>Nama Mahasiswa</th>
                                        <th>Tugas</th>
                                        <th>Nilai</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>
                                            <div class="d-flex ">
                                                <div>
                                                    <h6>Brandon Washington</h6>
                                                    <p>NIM</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>TUGAS</p>
                                        </td>
                                        <td>
                                            <form class="forms-sample material-form" method="POST"
                                                action="{{ url('dosen/kelas/kirim/' . $kelas->id) }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" required="required">
                                                </div>
                                        </td>
                                        <td>
                                            <div class="button-container">
                                                <button type="submit"
                                                    class="button btn btn-primary"><span>Submit</span></button>
                                            </div>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>
@endsection
