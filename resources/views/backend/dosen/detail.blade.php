@extends('.../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">DETAIL DOSEN</h5>

                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" readonly
                        placeholder="Judul Penelitian" value={{ $dosen->nama }} name="nama" />
                </div>
                <div class="form-group">
                    <label for="html5-date-input" class="form-label">Tanggal Kelulusan</label>
                    <div>
                        <input name="tgl"class="form-control" value={{ $dosen->tgl }} readonly type="date"
                            id="html5-date-input" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Foto Lama</label>
                    <div>
                        <img src="{{ asset('uploads/dosen/' . $dosen->foto) }}" class="img-thumbnail" width="200"
                            height="200">
                    </div>
                </div>
                {{-- <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto" id="alamat" placeholder="Masukan Foto" >
                            <div class="text-danger">@error('foto'){{$message}}@enderror</div>
                          </div> --}}
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Universitas</label>
                    <input type="text" class="form-control" readonly id="exampleFormControlInput1"
                        placeholder="Judul Penelitian" value={{ $dosen->univ }} name="univ" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" class="form-control" readonly id="exampleFormControlInput1"
                        placeholder="Judul Penelitian" value={{ $dosen->email }} name="email" />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                    <select readonly name="kategori" class="form-select" id="exampleFormControlSelect1"
                        aria-label="Default select example">
                        <option>{{ $dosen->kategori }}</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                            <label for="html5-date-input" class="form-label"></label>
                            <div>
                              <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                          </div> --}}
                </form>
            </div>
        </div>
    </div>

@endsection
