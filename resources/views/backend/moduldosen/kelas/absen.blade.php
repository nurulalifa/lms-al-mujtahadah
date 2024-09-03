@extends('../backenddosen')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Atur Jadwal Absensi</h4>
                    <form class="form-sample" action="{{url('dosen/absen/simpan/'.$id)}}" method="POST">
                        @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Batas Tanggal Buka Absensi</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_m" value="{{ $absen->tanggal_m ?? '' }}" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Batas Jam Buka Absensi</label>
                            <div class="col-sm-9">
                              <input type="time" name="jam_m"  value="{{ $absen->jam_m ?? '' }}" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Batas Tanggal Tutup Absensi</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_s"  value="{{ $absen->tanggal_s ?? '' }}"class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Batas Jam Tutup Absensi</label>
                              <div class="col-sm-9">
                                <input type="time" name="jam_s"  value="{{ $absen->jam_s ?? '' }}" class="form-control" />
                              </div>
                            </div>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
