@extends('../backenddosen')
@section('content')
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$jadwal->nama}}</h4>
        <p class="card-description"> {{$jadwal->hari}}, {{$jadwal->jam_m}} - {{$jadwal->jam_k}}
        </p>
        <a href="{{ url('rps/form/'.$jadwal->id) }}"> <button type="button"
            class="btn btn-primary btn-rounded btn-fw">Input RPS</button></a>

        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Pertemuan</th>
                <th>Bahan Kajian</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($rps as $r )
              <tr>
                <td>Pertemuan ke - {{$r->pertemuan}}</td>
                <td><p class="word-wrap">{{$r->bahan}}</p></td>
                <td><a href="{{url('rps/edit/'.$r->id)}}"><button class="badge badge-info">Edit RPS</button></a>
                    {{-- <a href="{{url('rps/delete/'.$r->id)}}"><button class="badge badge-danger">Delete RPS</button></a></td> --}}
                {{-- <td></td> --}}
              </tr>
              @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>

@endsection
