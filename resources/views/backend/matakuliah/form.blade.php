@extends('.../backend')
@section('content')
    <div class="row">
        <div>
            <div class="card mb-4">
              <h5 class="card-header">TAMBAH DOSEN</h5>
              <div class="card-body">
                <form method="POST" action="{{url('dosen/simpan')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Penelitian" name="nama"/>
                  </div>
                  <div class="mb-3">
                    <label for="html5-date-input" class="form-label">tanggal kelulusan</label>
                    <div>
                      <input name="tgl"class="form-control" type="date" id="html5-date-input" />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto" id="alamat" placeholder="Masukan Foto" >
                    <div class="text-danger">@error('foto'){{$message}}@enderror</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Universitas</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Penelitian" name="univ"/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Judul Penelitian" name="email"/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                    <select name="kategori" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                      <option >Pilih Dosen</option>
                      <option value="Teknik Informatika">Teknik Informatika</option>
                      <option value="Sistem Informasi">Sistem Informasi</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="html5-date-input" class="form-label"></label>
                    <div>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                  </div>
                </form>
                </div>
            </div>
        </div>
    </div>

@endsection
