@extends('.../backenddosen')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Aktifitas Kelas</h4>
                <form class="forms-sample" method="POST" action="{{ url('dosen/kelas/simpan/'.$id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label">Jenis Perkuliahan</label>
                            <select name="kategori" class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <option>Pilih Perkuliahan</option>
                                <option value="DISKUSI">Diskusi</option>
                                <option value="TUGAS">Tugas</option>
                                <option value="UJIAN">Ujian</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="judul" />
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <div>
                                <textarea class="form-control-sm" name="deskripsi" cols="150" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Bahan Materi</label>
                            <input type="file" class="form-control" name="bahan" id="alamat"
                                placeholder="Masukan Foto">
                            <div class="text-danger">
                                @error('foto')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label">Tanggal Pengumpulan</label>
                            <div>
                                <input name="tgl"class="form-control" type="date" id="html5-date-input" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label">Waktu Pengumpulan</label>
                            <div>
                                <input name="wkt"class="form-control" type="time" id="html5-date-input" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label  for="exampleInputName1" class="form-label"></label>
                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>

@endsection
