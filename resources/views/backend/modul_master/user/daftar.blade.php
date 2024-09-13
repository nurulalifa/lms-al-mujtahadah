@extends('../backend')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">User</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> Nama </th>
                <th> Email</th>
                <th> Role </th>

              </tr>
            </thead>
            <tbody>
                @foreach ( $user as $user )

              <tr>
                <td class="py-1">
                    {{$user->name}}
                </td>
                <td> {{$user->email}}</td>
                <td>{{$user->role}}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
