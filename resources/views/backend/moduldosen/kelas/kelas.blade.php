@extends('../backenddosen')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{$jadwal->id_matkul}}</h4>
                    <p>{{$jadwal->hari}},{{$jadwal->jam_m}} - {{$jadwal->jam_k}}</p>

                    <div class="table-responsive">
                      <table class="table table-striped">
                        {{-- <thead>
                          <tr>
                            <th>
                              User
                            </th>
                            <th>
                              First name
                            </th>
                            <th>
                              Progress
                            </th>
                            <th>
                              Amount
                            </th>
                            <th>
                              Deadline
                            </th>
                          </tr>
                        </thead> --}}
                    {{-- </br> --}}
                        <tbody>
                            @foreach ($rps as $r )
                            <tr>
                              <td class="py-1">
                              </br>
                                <h5>Pertemuan ke - {{$r->pertemuan}}</h5>
                               <p class="word-wrap">Bahan :{{$r->bahan}} </p>
                               <p>Absen : </p>

                              </td>
                              <td>
                                <a href="{{url('dosen/kelas/'.$r->id)}}">
                                    <button  class="badge badge-success">
                                        Absen
                                    </button>
                                </a>
                                <a href="{{url('dosen/kelas/'.$r->id)}}">
                                    <button  class="badge badge-info">
                                        Masuk
                                    </button>
                                </a>
                            </td>
                            </tr>
                            @endforeach
                          </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection