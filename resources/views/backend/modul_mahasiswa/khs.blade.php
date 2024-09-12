@extends('../backendmahasiswa')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kartu Hasil Semester</h4>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Mata Kuliah</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nilaiPerMatkul as $matkul)
                                        <tr>
                                            <td>{{ $matkul->matkul_id }}</td>
                                            <td>{{ $matkul->matkul_nama }}</td>
                                            <td>{{ number_format($matkul->nilai, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </br>
                            <h5>Hasil KHS<h5>
                            <p>Total Nilai KHS: {{ number_format($totalNilaiKHS, 2) }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
