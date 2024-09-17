@extends('.../backend')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">DETAIL SAMBUTAN</h5>
               <form action="{{url('sambutan/update/'.$sambutan->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Isi Kata Sambutan </label></br>
                    <textarea class="form-control-sm" name="isi" cols="150" rows="20">{{ $sambutan->isi }}</textarea>

                </div>

                <div class="form-group">
                    <label for="html5-date-input" class="form-label"></label>
                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
