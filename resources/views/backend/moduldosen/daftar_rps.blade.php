@extends('../backend')
@section('content')
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$jadwal->id_matkul}}</h4>
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
              <tr>
                @foreach ($rps as $r )
                <td>Pertemuan ke - {{$r->pertemuan}}</td>
                <td>{{$r->bahan}}</td>
                <td><a href="{{url('rps/form/'.$r->id)}}"><button class="badge badge-info">Detail RPS</button></a></td>
                {{-- tambahkan '/'.$rps->id --}}
                @endforeach
              </tr>


            </tbody>
          </table>
        </div>
      </div>
    </div>

@endsection
