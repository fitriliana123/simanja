<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\jam_jadwal;
use App\Models\kelas;
use App\Models\Mapel;
use App\Models\Jadwal;
use App\Models\guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DadminController extends Controller
{
    function index()
    {
        $data['kelas'] = kelas::count();
        $data['guru'] = guru::count();
        $data['siswa'] = Siswa::count();
        return view('admin.beranda',$data);
    }
}
