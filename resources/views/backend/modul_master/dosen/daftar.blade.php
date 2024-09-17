@extends('../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Dosen</h4>
                <p><a href="{{ url('dosen/tambah') }}"> <button type="button"
                            class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
                </p>
                <div class="table">
                    <table id="table" class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Foto</th>
                                <th>Nama Dosen</th>
                                <th>Option</th>
                                {{-- <th>Amount</th>
                                        <th>Deadline</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="py-1">
                                        <img src="{{ asset('uploads/dosen/' . $data->foto) }}" alt="image" />
                                    </td>
                                    <td>
                                        {{ $data->nama }}
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
                                                    href="{{ url('dosen/detail/' . $data->id) }}">Detail</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ url('dosen/edit/' . $data->id) }}">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item"
                                                    href="{{ url('dosen/delete/' . $data->id) }}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                            @endforeach
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
