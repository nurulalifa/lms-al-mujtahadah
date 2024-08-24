@extends('.../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">INPUT JADWAL PERKULIAHAN </h5>
                <form class="" method="POST" action="{{ url('jadwalkul/simpan') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="form-label">Nama Mata Kuliah</label>
                        <select name="matkul" class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example">
                            <option>Pilih Mata Kuliah </option>
                            @foreach ($matkul  as $m )
                            <option value="{{$m->id}}">{{$m->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Jam Masuk</label>
                        <input type="time" class="form-control" id="exampleFormControlInput1"
                            placeholder="NIM" name="jam_m" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Jam Keluar</label>
                        <input type="time" class="form-control" id="exampleFormControlInput1"
                             name="jam_k" />
                    </div>
                   
                    <div class="form-group">
                        <label for="html5-date-input" class="form-label"></label>
                        <div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection