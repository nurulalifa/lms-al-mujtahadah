@extends('../backenddosen')
@section('content')
    <div class="row mb-5">
        @foreach ($jadwal as $j )
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{$j->nama}}</h5>

                    <img class="img-fluid d-flex mx-auto my-4" src="{{asset('backend/dist/assets/images/belajar.png')}}" alt="Card image cap" />
                    <h6 class="card-subtitle text-muted">{{$j->hari}}</h6>
                    <p class="card-text">{{$j->jam_m}} - {{$j->jam_k}}</p>
                    <a href="{{url('input/rps/'.$j->id)}}" class="card-link">Input RPS</a>
                    <a href="{{url('dosen/jadwal/'.$j->id)}}" class="card-link">Kelas</a>
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
