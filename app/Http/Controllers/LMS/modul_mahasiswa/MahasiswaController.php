<?php

namespace App\Http\Controllers\LMS\modul_mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Absen;
use App\Models\Absen_mahasiswa;
use App\Models\RPS;
use App\Models\Aktifitas;
use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Jadwal_Mahasiswa;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Kelas;
use App\Models\KHS;
use App\Models\Tugas;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $tahunn = DB::table('table_matkul')
            ->select('tahun')
            ->distinct()
            ->get();

        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email', $email)->first();

        $mahasiswa = DB::table('table_jadwal_mahasiswa')
            ->join('table_mahasiswa', 'table_jadwal_mahasiswa.id_mahasiswa', '=', 'table_mahasiswa.id')
            ->join('table_jadwal as tj', 'table_jadwal_mahasiswa.id_jadwal', '=', 'tj.id')
            ->join('table_matkul', 'tj.id_matkul', '=', 'table_matkul.id')
            ->select(
                'table_mahasiswa.*',
                'tj.hari as hari',
                'tj.jam_m as jam_mulai',
                'tj.jam_k as jam_selesai',
                'table_matkul.kode as kode_matkul',
                'table_matkul.nama as nama_matkul', // Alias kolom untuk nama matkul
                'table_matkul.id as id_matkul',
                'tj.id as id_jadwal'
            )
            ->where('table_jadwal_mahasiswa.id_mahasiswa', $id_mahasiswa->id)
            ->get();
        return view('backend.modul_mahasiswa.dashboard', compact('mahasiswa', 'tahunn'));
    }
    public function index2($tahun)
    {
        $tahunn = DB::table('table_matkul')
            ->select('tahun')
            ->distinct()
            ->get();

        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email', $email)->first();

        $mahasiswa = DB::table('table_jadwal_mahasiswa')
            ->join('table_mahasiswa', 'table_jadwal_mahasiswa.id_mahasiswa', '=', 'table_mahasiswa.id')
            ->join('table_jadwal as tj', 'table_jadwal_mahasiswa.id_jadwal', '=', 'tj.id')
            ->join('table_matkul', 'tj.id_matkul', '=', 'table_matkul.id')
            ->select(
                'table_mahasiswa.*',
                'tj.hari as hari',
                'tj.jam_m as jam_mulai',
                'tj.jam_k as jam_selesai',
                'table_matkul.kode as kode_matkul',
                'table_matkul.nama as nama_matkul', // Alias kolom untuk nama matkul
                'table_matkul.id as id_matkul',
                'tj.id as id_jadwal'
            )
            ->where('table_jadwal_mahasiswa.id_mahasiswa', $id_mahasiswa->id)
            ->where('table_matkul.tahun', $tahun)
            ->get();
        return view('backend.modul_mahasiswa.dashboard', compact('mahasiswa', 'tahunn'));
    }

    public function kelas($id)
    {
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email', $email)->first();

        // $jadwal = Jadwal::where('id', $id)->first();

        $jadwal = Jadwal::join('table_matkul', 'table_jadwal.id_matkul', '=', 'table_matkul.id')
            ->select('table_matkul.nama', 'table_jadwal.*')
            ->where('table_jadwal.id', $id)
            ->first();

        $rps = RPS::where('id_jadwal', $id)->get();
        $absen = Absen::where('id_jadwal', $id)->get();
        $absen_mahasiswa = Absen_mahasiswa::where('id_mahasiswa', $id_mahasiswa->id)->where('id_jadwal', $id)->first();


        return view('backend.modul_mahasiswa.kelas', compact('jadwal', 'rps', 'absen', 'absen_mahasiswa'));
    }
    public function detail_kelas($id)
    {
        // $rps = RPS::where('id', $id)->first();
        $rps = RPS::join('table_matkul', 'table_rps.id_matkul', '=', 'table_matkul.id')
            ->select('table_rps.*', 'table_matkul.nama')
            ->where('table_rps.id', $id)
            ->first();
        $kelas = Kelas::where('id_rps', $id)->get();

        return view('backend.modul_mahasiswa.detail_kelas', compact('rps', 'kelas'));
    }
    public function absen($id)
    {
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email', $email)->first();

        $rps = RPS::findOrFail($id);
        Absen_mahasiswa::create([
            'id_mahasiswa' => $id_mahasiswa->id,
            'id_matkul' => $rps->id_matkul,
            'id_jadwal' => $rps->id_jadwal,
            'id_rps' => $rps->id,
            'absen' => 'absen',
            'waktu' => now()
        ]);
        return redirect()->back();
    }
    public function aktifitas($id)
    {
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email', $email)->first();

        $kelas = Kelas::findOrFail($id);
        // $aktifitas = Aktifitas::where('id_kelas', $id)->get();
        $aktifitas = Aktifitas::where('id_kelas', $id)
        ->leftJoin('table_mahasiswa', 'table_aktifitas.id_pengguna', '=', 'table_mahasiswa.nim')
        ->leftJoin('table_dosen', 'table_aktifitas.id_pengguna', '=', 'table_dosen.nidn')
        ->select('table_aktifitas.*', 'table_mahasiswa.nama as nama_m', 'table_dosen.nama as nama_d')
        ->get();
        $tugas = Tugas::where('id_kelas', $id)->where('id_mahasiswa', $id_mahasiswa->id)->first();
        return view('backend.modul_mahasiswa.aktifitas', compact('kelas', 'aktifitas', 'tugas'));
    }
    public function kirim_pesan($id)
    {
        // $auth = Auth::id();
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email', $email)->first();

        $kelas = Kelas::findOrFail($id);
        Aktifitas::create([
            'id_jadwal' => $kelas->id_jadwal,
            'id_matkul' => $kelas->id_matkul,
            'id_rps' => $kelas->id,
            'id_pengguna' => $id_mahasiswa->nim,
            'id_kelas' => $kelas->id,
            'pesan' => Request()->pesan
        ]);
        return redirect('mahasiswa/kelas/aktifitas/' . $kelas->id);
    }

    public function upload_tugas($id)
    {
        $email = Auth::user()->email;
        $id_mahasiswa = Mahasiswa::where('email', $email)->first();

        $kelas = Kelas::findOrFail($id);
        $data = Tugas::where('id_kelas', $id)->where('id_mahasiswa', $id_mahasiswa->id)->first();

        $tugas = Request()->tugas;
        if ($tugas) {
            $new_tugas = Str::random(16) . '.' . $tugas->extension();
            $tugas->move('uploads/tugas/', $new_tugas);
        } else {
            $new_tugas = '';
        }

        if ($data) {
            $data->file = $new_tugas;
            $data->link = Request()->link;
            $data->save();
        } else {
            Tugas::create([
                'id_jadwal' => $kelas->id_jadwal,
                'id_matkul' => $kelas->id_matkul,
                'id_rps' => $kelas->id,
                'id_mahasiswa' => $id_mahasiswa->id,
                'id_kelas' => $kelas->id,
                'file' => $new_tugas,
                'link' => Request()->link
            ]);
        }
        return redirect()->back();
    }
    public function pilih_smt()
    {
        $smt = KHS::all();
        return view('backend.modul_mahasiswa.semester', compact('$smt'));
    }

    // public function calculateFinalScore()
    // {
    //     $email = Auth::user()->email;
    //     $id_mahasiswa = Mahasiswa::where('email', $email)->first();

    //     // Mendapatkan nilai per mata kuliah
    //     $nilaiPerMatkul = DB::table('table_tugas')
    //         ->join('table_matkul', 'table_tugas.id_matkul', '=', 'table_matkul.id')
    //         ->select('table_matkul.nama as mata_kuliah', 'table_matkul.bobot as sks', DB::raw('AVG(table_tugas.nilai) as nilai_rata'))
    //         ->groupBy('table_tugas.id_matkul')


    //         ->where('id_mahasiswa',$id_mahasiswa->id)
    //         ->get();

    //     // Menampilkan hasil nilai per mata kuliah
    //     foreach ($nilaiPerMatkul as $matkul) {
    //         echo "Mata Kuliah: {$matkul->mata_kuliah} | SKS: {$matkul->sks} | Nilai Rata-rata: {$matkul->nilai_rata}\n";
    //     }

    //     $totalBobotNilai = 0;
    //     $totalSKS = 0;

    //     foreach ($nilaiPerMatkul as $matkul) {
    //         // Misalkan nilai_rata sudah dalam skala 0-4, atau lakukan konversi jika diperlukan
    //         $bobotNilai = $matkul->nilai_rata * $matkul->sks;
    //         $totalBobotNilai += $bobotNilai;
    //         $totalSKS += $matkul->sks;
    //     }

    //     $ipk = $totalBobotNilai / $totalSKS;

    //     // Menampilkan hasil KHS
    //     echo "\nHasil KHS:\n";
    //     echo "Total SKS: {$totalSKS}\n";
    //     echo "IPK: " . round($ipk, 2) . "\n";
    // }

    public function calculateFinalScore()
    {
        $email = Auth::user()->email;
        $id_mahasiswa = DB::table('table_mahasiswa')->where('email', $email)->first()->id;

        // Anggap $id_mahasiswa adalah ID mahasiswa yang relevan

        // Ambil semua jadwal yang diambil oleh mahasiswa
        $jadwals = DB::table('table_jadwal_mahasiswa')
            ->where('id_mahasiswa', $id_mahasiswa)
            ->pluck('id_jadwal');

        // Query untuk mendapatkan nilai per mata kuliah
        $nilaiPerMatkul = DB::table('table_matkul')
            ->join('table_rps', 'table_matkul.id', '=', 'table_rps.id_matkul')
            ->leftJoin('table_absen_mahasiswa', function ($join) use ($id_mahasiswa) {
                $join->on('table_rps.id', '=', 'table_absen_mahasiswa.id_rps')
                    ->where('table_absen_mahasiswa.id_mahasiswa', '=', $id_mahasiswa);
            })
            ->select('table_matkul.kode as matkul_id', 'table_matkul.nama as matkul_nama', DB::raw('SUM(table_rps.bobot) as total_bobot_rps'), DB::raw('SUM(table_absen_mahasiswa.absen) as total_absen'))
            ->whereIn('table_rps.id_jadwal', $jadwals)
            ->groupBy('table_matkul.id', 'table_matkul.nama')
            ->get()
            ->map(function ($item) {
                // Hitung bobot absensi
                $bobotAbsensi = 30;
                $totalBobotRPS = $item->total_bobot_rps;
                $totalAbsen = $item->total_absen;

                // Hitung nilai per mata kuliah
                $nilaiPerMatkul = ($totalBobotRPS + $bobotAbsensi) / 100;

                return (object) [
                    'matkul_id' => $item->matkul_id,
                    'matkul_nama' => $item->matkul_nama,
                    'nilai' => $nilaiPerMatkul
                ];
            });

        // Hitung KHS
        $totalNilaiKHS = $nilaiPerMatkul->sum('nilai');

        // Kembalikan view dengan data
        return view('backend.modul_mahasiswa.khs', [
            'nilaiPerMatkul' => $nilaiPerMatkul,
            'totalNilaiKHS' => $totalNilaiKHS
        ]);
    }


    public function khs()
    {
        // Ambil data mahasiswa berdasarkan ID
        $email = Auth::user()->email;
        $mahasiswa = Mahasiswa::where('email', $email)->first();

        // $mahasiswa = Mahasiswa::whwre($id_mahasiswa);

        // Pastikan mahasiswa ditemukan
        if (!$mahasiswa) {
            return response()->json([
                'message' => 'Mahasiswa tidak ditemukan.'
            ], 404);
        }

        // Ambil data KHS berdasarkan mahasiswa dan semester
        $khs = KHS::where('id_mahasiswa', $$mahasiswa->id)
            ->with(['matkul', 'dosen', 'jadwal'])
            ->get();

        // Pastikan data KHS tersedia
        if ($khs->isEmpty()) {
            return response()->json([
                'message' => 'Data KHS tidak ditemukan untuk semester ini.'
            ], 404);
        }

        // Return data KHS dalam bentuk JSON
        return response()->json([
            'mahasiswa' => $mahasiswa,
            'khs' => $khs
        ], 200);
    }
}
