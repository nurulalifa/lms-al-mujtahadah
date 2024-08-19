@extends('.../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">INPUT DATA MAHASISWA</h5>
                <form class="" method="POST" action="{{ url('mahasiswa/simpan') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Judul Penelitian" name="nama" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tempat lahir</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Judul Penelitian" name="nama" />
                    </div>
                    <div class="mb-3">
                        <label for="html5-date-input" class="form-label">Tanggal Lahir</label>
                        <div>
                            <input name="tgl"class="form-control" type="date" id="html5-date-input" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Jenis Kelamin</label>
                        <select name="kategori" class="form-select" id="exampleFormControlSelect1"
                            aria-label="Default select example">
                            <option>Pilih Jenis Kelamin</option>
                            <option value="l">Laki - Laki</option>
                            <option value="p">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Agama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Judul Penelitian" name="nama" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Judul Penelitian" name="nama" />
                    </div>
                    <div class="mb-3">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto" id="alamat" placeholder="Masukan Foto">
                        <div class="text-danger">
                            @error('foto')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Judul Penelitian" name="email" />
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

@endsection
