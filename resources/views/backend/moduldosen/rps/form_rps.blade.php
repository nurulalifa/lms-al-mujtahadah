@extends('../backend')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Input RPS</h4>
                        <form class="forms-sample" method="POST" action="{{url('rps/simpan/')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Pertemuan ke : (1-16) </label>
                                <input name="id" value="{{$jadwal->id}}" hidden>
                                <input type="number" name="pertemuan" placeholder="Isi dengan angka" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Kemampuan Akhir Yang Diharapkan</label>
                                <div>
                                    <textarea class="form-control-sm" name="kemampuan" cols="142" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bahan Kajian</label>
                                <div>
                                    <textarea class="form-control-sm" name="bahan" cols="142" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Metode Pembelajaran</label>
                                <div>
                                    <textarea class="form-control-sm" name="metode" cols="142" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="text" name="img" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">Pengalaman</label>
                                <div>
                                    <textarea class="form-control-sm" name="waktu" cols="142" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Kriteria Penilaian dan Indikator (text)</label>
                                <div>
                                    <textarea class="form-control-sm" name="kriteria" cols="142" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bobot Penilaian (%)</label>
                                <input type="number" name="bobot"  class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Jenis Ujian (Jika Ujian)</label>
                                <input type="text" name="jenis_ujian"  class="form-control">
                              </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
