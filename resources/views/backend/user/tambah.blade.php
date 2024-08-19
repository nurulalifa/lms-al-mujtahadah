@extends('../backend')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Ruangan</h4>
        <p class="card-description"> Basic form elements </p>
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Name Ruangan</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
        
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
