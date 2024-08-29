@extends('.../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">EDIT PRODI</h5>
                <form class="" method="POST" action="{{ url('prodi/update/'.$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Kode Prodi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Kode Prodi" value="{{$data->kode_prodi}}" name="kode_prodi" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Nama Prodi</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama Prodi" value="{{$data->nama_prodi}}" name="nama_prodi" />
                    </div>

                    <div class="form-group">
                        <label for="html5-date-input" class="form-label"></label>
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
