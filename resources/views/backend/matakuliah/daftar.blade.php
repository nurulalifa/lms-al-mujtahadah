@extends('../backend')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">DAFTAR MATAKULIAH</h4>
                        <a href="{{ url('matkul/tambah') }}"> <button type="button"
                                class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jadwal</th>
                                        <th>Mata Kuliah</th>
                                        <th>Kelas</th>
                                        <th>Dosen Pengampu</th>
                                        <th>Ruangan</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
