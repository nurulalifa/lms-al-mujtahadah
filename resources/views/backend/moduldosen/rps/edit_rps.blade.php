@extends('../backend')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Input RPS</h4>
                        <form class="forms-sample" method="POST" action="{{url('rps/update/'.$data->id)}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Pertemuan ke : (1-16) </label>
                                <input type="number" value="{{$data->pertemuan}}" name="pertemuan" placeholder="Isi dengan angka" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Kemampuan Akhir Yang Diharapkan</label>
                                <div>
                                    <textarea class="form-control-sm" value="" name="kemampuan" cols="142" rows="5">{{$data->kemampuan}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bahan Kajian</label>
                                <div>
                                    <textarea class="form-control-sm" value='' name="bahan" cols="142" rows="5">{{$data->bahan}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Metode Pembelajaran</label>
                                <div>
                                    <textarea class="form-control-sm" value="" name="metode" cols="142" rows="5">{{$data->metode}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="text" name="waktu" value="{{$data->waktu}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">Pengalaman</label>
                                <div>
                                    <textarea class="form-control-sm" name="pengalaman" cols="142" rows="5">{{$data->pengalaman}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Kriteria Penilaian dan Indikator (text)</label>
                                <div>
                                    <textarea class="form-control-sm" name="kriteria" cols="142" rows="5">{{$data->kriteria}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bobot Penilaian (%)</label>
                                <input type="number" name="bobot"  value="{{$data->bobot}}" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Jenis Ujian (Jika Ujian)</label>
                                <input type="text" value="{{$data->jenis_ujian}}" name="jenis_ujian"  class="form-control">
                              </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
