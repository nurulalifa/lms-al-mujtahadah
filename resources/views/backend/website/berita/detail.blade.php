@extends('.../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">DETAIL BERITA</h5>

                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                    <textarea type="text" class="form-control"  placeholder="Judul Penelitian" readonly
                        value= name="judul" />{{ $berita->judul}}</textarea>
                </div>
                <div class="form-group">
                    <label for="html5-date-input" class="form-label">Tanggal Kelulusan</label>
                    <div>
                        <input readonly name="tgl"class="form-control" value={{ $berita->tglpublish }} readonly type="date"
                            id="html5-date-input" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Foto Lama</label>
                    <div>
                        <img src="{{ asset('uploads/berita/' . $berita->gambar) }}" class="img-thumbnail"
                            width="200" height="200">
                    </div>
                </div>
                {{-- <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto" id="alamat" placeholder="Masukan Foto" >
                            <div class="text-danger">@error('foto'){{$message}}@enderror</div>
                          </div> --}}
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Isi Berita </label></br>
                    <textarea readonly class="form-control-sm" name="pengalaman" cols="150" rows="20">{{$berita->isi}}</textarea>

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
