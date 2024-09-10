@extends('../backendmahasiswa')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $jadwal->nama }}</h4>
                        {{-- {{ $jadwal->id_matkul }} --}}
                        {{-- <p>{{ $jadwal->hari }},{{ $jadwal->jam_m }} - {{ $jadwal->jam_k }}</p> --}}

                        <div class="table-responsive">
                            <table class="table table-striped">
                                {{-- <thead>
                                    <tr>
                                        <th>
                                            User
                                        </th>
                                        <th>
                                            First name
                                        </th>
                                        <th>
                                            Progress
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>
                                            Deadline
                                        </th>
                                    </tr>
                                </thead> --}}
                                {{-- </br> --}}
                                <tbody>
                                    @foreach ($rps as $r)
                                        <tr>
                                            <td class="py-1">
                                                </br>
                                                <h5>Pertemuan ke - {{ $r->pertemuan }}</h5>
                                                <p class="word-wrap">Bahan :{{ $r->bahan }} </p>
                                                @php
                                                    $absenData = $absen->firstWhere('id_rps', $r->id);
                                                @endphp
                                                @if ($absenData)
                                                    <p>Absen:
                                                        {{ \Carbon\Carbon::parse($absenData->tanggal_m)->format('d M Y') }}
                                                        -
                                                        {{ $absenData->jam_m }} s/d
                                                        {{ \Carbon\Carbon::parse($absenData->tanggal_s)->format('d M Y') }}
                                                        -
                                                        {{ $absenData->jam_s }}
                                                    </p>
                                                @else
                                                    <p>Absen: </p>
                                                @endif

                                                @if (isset($absen_mahasiswa) && $absen_mahasiswa)
                                                @php
                                                        $absenMahasiswa = $absen_mahasiswa->firstWhere(
                                                            'id_rps',
                                                            $r->id,
                                                        );
                                                    @endphp
                                                    @if ($absenMahasiswa)
                                                        <p>Status Absen: {{ $absenMahasiswa->absen }} -
                                                            {{ $absenMahasiswa->waktu }}</p>
                                                    @else
                                                        <p>Status Absen: </p>
                                                    @endif
                                                @else
                                                    <p>Status Absen: </p>
                                                @endif
                                            </td>
                                            <td>
                                                @if (isset($absen_mahasiswa) && $absen_mahasiswa)
                                                @php
                                                        $absenMahasiswa = $absen_mahasiswa->firstWhere(
                                                            'id_rps',
                                                            $r->id,
                                                        );
                                                    @endphp
                                                    @if ($absenMahasiswa)
                                                    <a href="{{ url('mahasiswa/absen/' . $r->id) }}">
                                                        <button class="badge badge-success" disabled>
                                                           Absen
                                                        </button>
                                                    </a>
                                                    @else
                                                    <a href="{{ url('mahasiswa/absen/' . $r->id) }}">
                                                        <button class="badge badge-warning">
                                                            Absen
                                                        </button>
                                                    </a>
                                                    @endif
                                                @else
                                                <a href="{{ url('mahasiswa/absen/' . $r->id) }}">
                                                    <button class="badge badge-warning">
                                                        Absen
                                                    </button>
                                                </a>
                                                @endif

                                                <a href="{{ url('mahasiswa/kelas/detail/' . $r->id) }}">
                                                    <button class="badge badge-info">
                                                        Masuk
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
