@extends('../backend')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Input RPS</h4>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Pertemuan ke : </label>
                                <input type="text" value="{{ $pertemuan }}" name="pertemuan" disabled
                                    class="form-control" id="exampleInputEmail3" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Kemampuan Akhir Yang Diharapkan</label>
                                <div>
                                    <textarea class="form-control-sm" cols="142" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bahan Kajian</label>
                                <div>
                                    <textarea class="form-control-sm" cols="142" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Metode Pembelajaran</label>
                                <div>
                                    <textarea class="form-control-sm" cols="142" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="text" name="img" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">Pengalaman</label>
                                <div>
                                    <textarea class="form-control-sm" cols="142" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Kriteria Penilaian dan Indikator (text)</label>
                                <div>
                                    <textarea class="form-control-sm" cols="142" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bobot Penilaian (%)</label>
                                <input type="text" name="img"  class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Jenis Ujian (Jika Ujian)</label>
                                <input type="text" name="img"  class="form-control">
                              </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
