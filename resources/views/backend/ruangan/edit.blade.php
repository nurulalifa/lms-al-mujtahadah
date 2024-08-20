@extends('.../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">EDIT RUANGAN</h5>
                <form class="" method="POST" action="{{ url('ruangan/update/'.$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Nama Ruangan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama Ruangan" value="{{$data->nama}}" name="nama" />
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
