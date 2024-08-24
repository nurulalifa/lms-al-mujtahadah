@extends('../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Mata Kuliah</h4>
                <form class="forms-sample" method="POST" action="{{url('matkul/simpan')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Mata Kuliah</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Nama Matakuliah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Kode Mata Kuliah</label>
                        <input type="text" name="kode" class="form-control" id="exampleInputName1" placeholder="Kode Matakuliah">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="form-label">Dosen Pengampu</label>
                        <select name="id_dosen" class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example">
                            <option>Pilih Dosen</option>
                            @foreach ($dosen  as $d )
                            <option value="{{$d->id}}">{{$d->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Bobot Matakuliah</label>
                        <input type="text" name="bobot" class="form-control" id="exampleInputName1" placeholder="Bobot Matakuliah">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="form-label">Ruangan </label>
                        <select name="id_dosen" class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example">
                            <option>Pilih Ruangan</option>
                            @foreach ($ruangan  as $r )
                            <option value="{{$r->id}}">{{$d->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
