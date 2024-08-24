@extends('../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Mahasiwa</h4>
                <a href="{{ url('/jadwalkul/mahasiswa/tambah/'.$id) }}"> <button type="button"
                        class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
                <div class="table">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->id_mahasiswa }}</td>
                                    <td>
                                        <div >
                                            <a
                                            href="{{ url('/jadwalkul/mahasiswa/hapus/' . $d->id.'/'.$d->id_mahasiswa) }}">
                                            <button type="button" class="btn btn-inverse-info btn-fw">
                                                <i class="fa fa-delete"></i>
                                                Hapus Mahasiswa
                                            </button>
                                            </a>
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
