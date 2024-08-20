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
                        <label for="exampleInputName1">Bobot Matakuliah</label>
                        <input type="text" name="bobot" class="form-control" id="exampleInputName1" placeholder="Bobot Matakuliah">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
