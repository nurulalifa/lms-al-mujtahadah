@extends('../backendmahasiswa')
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
                                        <div><span class="text-light-green">{{ $a->nama_m }}{{$a->nama_d}},</span> {{ $a->pesan }}
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
                            action="{{ url('mahasiswa/kelas/kirim/' . $kelas->id) }}">
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
        @if ($kelas->jenis_perkuliahan == 'UJIAN' or $kelas->jenis_perkuliahan == 'TUGAS')
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title card-title-dash">Kumpulkan Tugas Mahasiswa</h4>
                                </div>
                            </div>
                        </br>
                            <form class="forms-sample" method="POST" action="{{ url('mahasiswa/kelas/upload/' . $kelas->id) }}"
                                enctype="multipart/form-data">
                                @csrf

                                @if($tugas)
                                <div class="form-group">
                                 <a href="{{asset('uploads/tugas/'.$tugas->file)}}" target="_blank"> Lihat Tugas </a>
                                    <div>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputName1">Upload File</label>
                                    <input type="file" class="form-control" name="tugas"
                                        placeholder="Masukan File">
                                    <div class="text-danger">
                                        @error('file')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label">Link Tugas</label>
                                    <div>
                                        <input name="link"class="form-control"
                                        @if($tugas)
                                        value="{{$tugas->link}}"
                                        @endif
                                         type="text" placeholder="Link tugas" id="html5-date-input" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1" class="form-label"></label>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection
