@extends('../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Mata Kuliah</h4>
                <p>
                    <a href="{{ url('matkul/tambah') }}"> <button type="button"
                            class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
                </p>
                <div class="table">
                    <table id="table" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode MK</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Bobot Matkul</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data )
                            <tr>
                                <td> {{$loop->iteration}} </td>
                                <td> {{$data->kode}} </td>
                                <td> {{$data->nama}} </td>
                                <td> {{$data->bobot}} </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-inverse-info btn-fw"
                                            id="dropdownMenuIconButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">
                                            <a class="dropdown-item"
                                                href="{{ url('matkul/edit/' . $data->id) }}">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item"
                                                href="{{ url('matkul/delete/' . $data->id) }}">Delete</a>
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
    </div>
    </div>
@endsection
