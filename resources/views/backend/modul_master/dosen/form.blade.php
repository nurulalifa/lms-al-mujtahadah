@extends('.../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Input Data Dosen</h4>
                <form class="forms-sample" method="POST" action="{{ url('dosen/simpan') }}" enctype="multipart/form-data">
                    <form class="forms-sample" method="POST" action="{{ url('dosen/simpan') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama"
                                name="nama" />
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label">NIDN</label>
                            <div>
                                <input name="nidn"class="form-control"placeholder ="NIDN" type="text" id="html5-date-input" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Foto</label>
                            <input type="file" class="form-control" name="foto" id="alamat"
                                placeholder="Masukan Foto">
                            <div class="text-danger">
                                @error('foto')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label">Universitas</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Universitas" name="univ" />
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email"
                                name="email" />
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label">Kategori</label>
                            <select name="kategori" class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option>Pilih Prodi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label"></label>
                            <div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>

@endsection
