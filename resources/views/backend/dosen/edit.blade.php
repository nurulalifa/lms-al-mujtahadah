@extends('.../backend')
@section('content')

      <!-- / Menu -->

      <!-- Layout container -->
        <div class="layout-page">
         <!-- Navbar -->
            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input
                            type="text"
                            class="form-control border-0 shadow-none"
                            placeholder="Search..."
                            aria-label="Search..."
                            />
                        </div>
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->
                             <li class="nav-item lh-1 me-3">
                                <a
                                class="github-button"
                                href="https://github.com/themeselection/sneat-html-admin-template-free"
                                data-icon="octicon-star"
                                data-size="large"
                                data-show-count="true"
                                aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                                >Star</a
                                >
                            </li>
                        <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{asset('backend/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                                </a>
                                 <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="{{asset('backend/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">Admin</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>{{ __('Logout') }}
                    </a>
                  </li>
                </ul>
                            </li>
                        <!--/ User -->
                    </ul>
            </nav>
        <!-- / Navbar -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div>
                    <div class="card mb-4">
                      <h4 class="card-header">EDIT DOSEN</h4>
                      <div class="card-body">
                        <form method="POST" action="{{url('dosen/update', $dosen->id)}}" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Penelitian" value={{$dosen->nama}} name="nama"/>
                          </div>
                          <div class="mb-3">
                            <label for="html5-date-input" class="form-label">tanggal Kelulusan</label>
                            <div>
                              <input name="tgl"class="form-control" value={{$dosen->tgl}} type="date" id="html5-date-input" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Foto Lama</label>
                            <div>
                            <img src="{{asset('uploads/dosen/'.$dosen->foto)}}" class="img-thumbnail" width="200" height="200">
                            </div>
                        </div>
                          <div class="mb-3">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto" id="alamat" placeholder="Masukan Foto" >
                            <div class="text-danger">@error('foto'){{$message}}@enderror</div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">universitas</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Penelitian" value={{$dosen->univ}} name="univ"/>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">email</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul Penelitian" value={{$dosen->email}} name="email"/>
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                            <select name="kategori" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                              <option >{{$dosen->kategori}}</option>
                              <option value="Teknik Informatika">Teknik Informatika</option>
                              <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="html5-date-input" class="form-label"></label>
                            <div>
                              <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection
