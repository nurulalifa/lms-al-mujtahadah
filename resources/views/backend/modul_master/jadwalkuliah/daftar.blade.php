@extends('../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Jadwal Perkuliahan</h4>
                <a href="{{ url('jadwalkul/tambah') }}"> <button type="button"
                        class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
                <div class="table">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Hari</th>
                                <th>Nama Matkul</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Dosen Pengampu</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->hari }}</td>
                                    <td>{{ $d->id_matkul }}</td>
                                    <td> {{ $d->jam_m }} </td>
                                    <td> {{ $d->jam_k }} </td>
                                    <td> {{ $d->id_dosen }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-inverse-info btn-fw"
                                                id="dropdownMenuIconButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton3">
                                                <a class="dropdown-item" href="{{ url('jadwalkul/mahasiswa/daftar/' . $d->id) }}">Daftar Mahasiswa</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ url('jadwalkul/edit/' . $d->id) }}">Edit Jadwal</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item"
                                                    href="{{ url('jadwalkul/delete/' . $d->id) }}">Hapus Jadwal</a>
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
