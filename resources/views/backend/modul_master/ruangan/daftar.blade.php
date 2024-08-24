@extends('../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Ruangan</h4>
                <p class="card-description">
                    <a href="{{ url('ruangan/tambah') }}"> <button type="button"
                            class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
                </p>
                <div class="table">
                    <table id="table" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Ruangan</th>
                                <th>Option</th>
                                {{-- <th>Amount</th>
                                        <th>Deadline</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data )

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                   {{$data->nama}}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-inverse-info btn-fw"
                                            id="dropdownMenuIconButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">

                                            <a class="dropdown-item"
                                                href="{{ url('ruangan/edit/' . $data->id) }}">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item"
                                                href="{{ url('ruangan/delete/' . $data->id) }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                           @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection