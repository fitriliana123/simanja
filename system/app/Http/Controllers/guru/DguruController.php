<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Models\jam_jadwal;
use App\Models\kelas;
use App\Models\Mapel;
use App\Models\Jadwal;
use App\Models\guru;
use App\Models\Siswa;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class DguruController extends Controller
{
    public function index()
    {
        $data['list_kelas'] = kelas::all();
        $kelas = $data['kelas'] = kelas::where('id',request('kelas'))->first();
        $data['list_mapel'] = Mapel::all();
        $user = \Auth::user()->Guru;

        $data['list_jadwal'] = Jadwal::where('id_guru',$user->id)->orderBy('id', 'asc')->get();
        $qrcode = QrCode::size(300)->generate('https://facebook.com');
        
        $data['kelas'] = kelas::count();
        $data['guru'] = guru::count();
        $data['siswa'] = Siswa::count();
        return view('guru.beranda',$data, compact('qrcode'));
    }
    public function generateQrCode()
    {
        $qrcode = QrCode::size(300)->generate('https://facebook.com');
        return view('qrcode', compact('qrcode'));
    }
}
