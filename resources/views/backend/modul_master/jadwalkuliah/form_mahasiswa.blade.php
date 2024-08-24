@extends('../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambahkan Mahasiswa</h4>
                <form class="forms-sample" method="POST" action="{{ url('/jadwalkul/mahasiswa/simpan/'.$id) }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Nama Mahasiswa</label>
                        <select name="id_mahasiswa" class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example">
                            <option>Pilih Mahasiswa</option>
                            @foreach ($data as $data)
                            <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
