@extends('../backend')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Ruangan</h4>
        <form class="forms-sample" method="POST" action="{{url('ruangan/simpan')}}">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nama Ruangan</label>
            <input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Nama Ruangan">
          </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
