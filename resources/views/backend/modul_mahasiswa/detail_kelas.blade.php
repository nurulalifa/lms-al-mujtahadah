@extends('../backendmahasiswa')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$rps->nama}} </h4>
                        {{-- {{$rps->id_matkul}} --}}
                        <p>Pertemuan ke - {{$rps->pertemuan}} </p>
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title card-title-dash"></h4>
                                <div class="add-items d-flex mb-0">
                                    <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                  {{-- <a href="{{url('dosen/kelas/tambah/'.$rps->id)}}">
                                    <button class="add btn btn-icons btn-rounded btn-primary todo-list-add text-white me-0 pl-12p">
                                        <i class="mdi mdi-plus"></i>
                                    </button>
                                </a> --}}
                                </div>
                            </div>
                            <div class="list-wrapper">
                                <ul class="todo-list todo-list-rounded">
                                    @foreach ($kelas as $k )
                                    @if ($k->jenis_perkuliahan == 'DISKUSI')
                                    <li class="d-block">
                                        <div>
                                            <label class="form-check-label">
                                                <h6><a href="{{url('mahasiswa/kelas/aktifitas/'.$k->id)}}"> [Diskusi] {{$k->judul}} </a></h6>
                                                    <p>{{$k->deskripsi}}</p>
                                            </label>
                                            @if($k->bahan)
                                            <div class="d-flex mt-2">
                                                <div class="ps-1 text-small me-3"><a href="{{asset('uploads/bahan/'.$k->bahan)}}">Download Materi</a></div>
                                                {{-- <i class="mdi mdi-flag ms-2 flag-color"></i> --}}
                                            </div>
                                            @else
                                            @endif
                                            {{-- <div class="d-flex mt-2">
                                                <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                            </div> --}}
                                            </br>
                                        </div>
                                    </li>

                                    @elseif ($k->jenis_perkuliahan == 'TUGAS')
                                    <li class="d-block">
                                        <div>
                                            <label class="form-check-label">
                                                <h6><a href="{{url('mahasiswa/kelas/aktifitas/'.$k->id)}}"> [Tugas] {{$k->judul}} </a> </h6>
                                                <p>{{$k->deskripsi}}</p>
                                            </label>

                                            @if($k->bahan)
                                            <div class="d-flex mt-2">
                                                <div class="ps-1 text-small me-3"><a href="{{asset('uploads/bahan/'.$k->bahan)}}">Download Materi</a></div>
                                                {{-- <i class="mdi mdi-flag ms-2 flag-color"></i> --}}
                                            </div>
                                            @else
                                            @endif
                                            <div class="d-flex mt-2">
                                                <div class="badge badge-opacity-warning ">Batas Tugas : {{$k->tanggal}}, {{$k->waktu}}</div>
                                            </div>
                                            </br>
                                        </div>
                                    </li>

                                    @else
                                    <li class="d-block">
                                        <div>
                                            <label class="form-check-label">
                                                <h6> <a href="{{url('mahasiswa/kelas/aktifitas/'.$k->id)}}"> [Ujian] {{$k->judul}} </a> </h6>
                                                    <p>{{$k->deskripsi}}</p>
                                            </label>

                                            @if($k->bahan)
                                            <div class="d-flex mt-2">
                                                <div class="ps-1 text-small me-3"><a href="{{asset('uploads/bahan/'.$k->bahan)}}">Download Materi</a></div>
                                                {{-- <i class="mdi mdi-flag ms-2 flag-color"></i> --}}
                                            </div>
                                            @else
                                            @endif
                                            <div class="d-flex mt-2">
                                                <div class="badge badge-opacity-warning ">Batas Tugas : {{$k->tanggal}}, {{$k->waktu}}</div>
                                            </div>
                                            </br>
                                        </div>
                                    </li>
                                    @endif



                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
