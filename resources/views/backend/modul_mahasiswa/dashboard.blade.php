@extends('../backendmahasiswa')
@section('tahun_ajar')

    <li class="nav-item dropdown d-none d-lg-block">
        <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown"
            data-bs-toggle="dropdown" aria-expanded="false">Pilih Tahun Ajaran </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
            <a class="dropdown-item py-3">
                <p class="mb-0 fw-medium float-start">Tahun Ajaran</p>
            </a>
            <div class="dropdown-divider"></div>
            @foreach ($tahunn as $thn)
                <a class="dropdown-item preview-item" href="{{url('mahasiswa/matkul/tahun/'.$thn->tahun)}}">
                    <div class="preview-item-content flex-grow py-2">
                        <p class="preview-subject ellipsis fw-medium text-dark">{{ $thn->tahun }} </p>
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </li>
@endsection
@section('content')
    <div class="row mb-5">
        @foreach($mahasiswa as $matkul)
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{$matkul->nama_matkul}}</h5>
                    <p>{{$matkul->kode_matkul}}</p>
                    <img class="img-fluid d-flex mx-auto my-4" src="{{asset('backend/dist/assets/images/belajar.png')}}" alt="Card image cap" />
                    <h6 class="card-subtitle text-muted">{{$matkul->hari}}</h6>
                    <p class="card-text">{{$matkul->jam_mulai}} - {{$matkul->jam_selesai}}</p>
                    {{-- <a href="{{url('input/rps/'.$matkul->id)}}" class="card-link">Input RPS</a> --}}
                    <a href="{{url('mahasiswa/kelas/'.$matkul->id_jadwal)}}" class="card-link">Masuk</a>
                </div>
            </div>
        </div>
        @endforeach
        {{-- <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                    <img class="img-fluid d-flex mx-auto my-4" src="../assets/img/elements/4.jpg" alt="Card image cap" />
                    <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                    <a href="javascript:void(0);" class="card-link">Card link</a>
                    <a href="javascript:void(0);" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                    <img class="img-fluid d-flex mx-auto my-4" src="../assets/img/elements/4.jpg" alt="Card image cap" />
                    <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                    <a href="javascript:void(0);" class="card-link">Card link</a>
                    <a href="javascript:void(0);" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                    <img class="img-fluid d-flex mx-auto my-4" src="../assets/img/elements/4.jpg" alt="Card image cap" />
                    <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                    <a href="javascript:void(0);" class="card-link">Card link</a>
                    <a href="javascript:void(0);" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                    <img class="img-fluid d-flex mx-auto my-4" src="../assets/img/elements/4.jpg" alt="Card image cap" />
                    <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                    <a href="javascript:void(0);" class="card-link">Card link</a>
                    <a href="javascript:void(0);" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                    <img class="img-fluid d-flex mx-auto my-4" src="../assets/img/elements/4.jpg" alt="Card image cap" />
                    <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                    <a href="javascript:void(0);" class="card-link">Card link</a>
                    <a href="javascript:void(0);" class="card-link">Another link</a>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
