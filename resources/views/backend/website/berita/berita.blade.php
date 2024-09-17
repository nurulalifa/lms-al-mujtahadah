@extends('../backend')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Berita</h4>
                <p class="card-description">
                    <a href="{{ url('berita/tambah') }}"> <button type="button"
                            class="btn btn-primary btn-rounded btn-fw">Tambah Data</button></a>
                </p>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead align="center">
                            <tr>
                                <th> No </th>
                                <th> Judul Berita </th>
                                <th> Tanggal Publish </th>
                                <th> Detail Berita</th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $berita )
                            <tr>
                                <td> {{$loop->iteration}} </td>
                                <td> {{$berita->judul}} </td>
                                <td>{{$berita->tglpublish}}</td>
                                <td>
                                    <a href="{{url('berita/detail/'.$berita->id)}}"> <button type="button" class="btn btn-link btn-rounded btn-fw">Detail</button> </a>
                                </td>
                                <td>
                                    <a href="{{url('berita/edit/'.$berita->id)}}"> <button type="button" class="btn btn-link btn-rounded btn-fw">Edit</button> </a>
                                    <a href="{{url('berita/delete/'.$berita->id)}}"> <button type="button" class="btn btn-link btn-rounded btn-fw">Delete</button> </a>
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
