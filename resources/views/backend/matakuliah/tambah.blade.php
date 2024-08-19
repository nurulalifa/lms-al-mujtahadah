@extends('../backend')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Input Data Mata Kuliah</h4>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Jadwal Pekuliahan</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Dosen Pengampu</label>
                                <select class="form-control" id="exampleSelectGender">
                                    <option>Pilih Dosen</option>
                                    <option>Contoh 1</option>
                                    <option>Contoh 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Kelas</label>
                                <select class="form-control" id="exampleSelectGender">
                                    <option>Pilih Kelas</option>
                                    <option>Contoh 1</option>
                                    <option>Contoh 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Ruangan</label>
                                <select class="form-control" id="exampleSelectGender">
                                    <option>Pilih Ruangan</option>
                                    <option>Contoh 1</option>
                                    <option>Contoh 2</option>
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="exampleInputCity1">City</label>
                                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                            </div> --}}
                            {{-- <div class="form-group">
                                <label for="exampleTextarea1">Textarea</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div> --}}
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
