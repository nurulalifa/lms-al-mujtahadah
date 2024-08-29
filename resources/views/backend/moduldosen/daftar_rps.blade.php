@extends('../backend')
@section('content')
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$jadwal->id_matkul}}</h4>
        <p class="card-description"> {{$jadwal->hari}}, {{$jadwal->jam_m}} - {{$jadwal->jam_k}}
        </p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Pertemuan</th>
                <th>Status</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pertemuan ke 1</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/1')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 2</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/2')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 3</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/3')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 4</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/4')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 5</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/5')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 6</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/6')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 7</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/7')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 8</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/8')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 9</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/9')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 10</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/10')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 11</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/11')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 12</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/12')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 13</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/13')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 14</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/14')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 15</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/15')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>
              <tr>
                <td>Pertemuan ke 16</td>
                <td></td>
                <td><a href="{{url('form/rps/'.$jadwal->id.'/16')}}"><button class="badge badge-info">Input RPS</button></a></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>

@endsection
