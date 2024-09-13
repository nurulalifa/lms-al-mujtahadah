@extends('../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Mata Kuliah</h4>
                <form class="forms-sample" method="POST" action="{{url('matkul/simpan')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="form-label">Pilih Prodi </label>
                        <select name="prodi" class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example">
                            <option>Pilih Prodi</option>
                            @foreach ($prodi as $prod )
                            <option value="{{$prod->id}}">{{$prod->nama_prodi}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Nama Mata Kuliah</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Nama Matakuliah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Kode Mata Kuliah</label>
                        <input type="text" name="kode" class="form-control" id="exampleInputName1" placeholder="Kode Matakuliah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Bobot Matakuliah</label>
                        <input type="text" name="bobot" class="form-control" id="exampleInputName1" placeholder="Bobot Matakuliah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Tahun Ajaran</label>
                        <input type="text" name="tahun" class="form-control" id="exampleInputName1" placeholder="Tahun Ajaran">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="form-label">Semester </label>
                        <select name="semester" class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example">
                            <option>Pilih Semester</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="form-label">Ruangan </label>
                        <select name="id_ruangan" class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example">
                            <option>Pilih Ruangan</option>
                            @foreach ($ruangan  as $r )
                            <option value="{{$r->id}}">{{$r->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
