@extends('../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Ruangan</h4>
                <p class="card-description"> Basic form elements
                    <a href="{{ url('dosen/tambah') }}"> <button type="button"
                            class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Option</th>
                                {{-- <th>Amount</th>
                                        <th>Deadline</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1">
                                    <img src="../../images/faces/face1.jpg" alt="image" />
                                </td>
                                <td>
                                    Herman Beck
                                </td>
                                <td>
                                    {{-- <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div> --}}
                                </td>
                                {{-- <td>
                                            $ 77.99
                                        </td>
                                        <td>
                                            May 15, 2015
                                        </td> --}}
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
@endsection
