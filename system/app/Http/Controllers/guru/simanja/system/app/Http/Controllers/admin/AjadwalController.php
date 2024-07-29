<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\jam_jadwal;
use App\Models\kelas;
use App\Models\Mapel;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class AjadwalController extends Controller
{
    function index()
    {
        $data['list_kelas'] = kelas::all();

        return view('admin.jadwal.index',$data);
    }
    function cek()
    {
        $data['list_kelas'] = kelas::all();
        $kelas = $data['kelas'] = kelas::where('id',request('kelas'))->first();
        $data['list_mapel'] = Mapel::all();


        $data['list_senin'] = jam_jadwal::where('hari', 'senin')->orderBy('jam_ke', 'asc')->get();
            

        $data['list_selasa'] = jam_jadwal::where('hari', 'selasa')->orderBy('jam_ke', 'asc')->get();


        $data['list_rabu'] = jam_jadwal::where('hari', 'rabu')->orderBy('jam_ke', 'asc')->get();


        $data['list_kamis'] = jam_jadwal::where('hari', 'kamis')->orderBy('jam_ke', 'asc')->get();


        $data['list_jumat'] = jam_jadwal::where('hari', 'jumat')->orderBy('jam_ke', 'asc')->get();


        $data['list_sabtu'] =  jam_jadwal::where('hari', 'sabtu')->orderBy('jam_ke', 'asc')->get();


        return view('admin.jadwal.cekkelas',$data);
    }
    function jam()
    {
        $data['list_senin'] = jam_jadwal::where('hari', 'senin')->orderBy('jam_ke', 'asc')->get();
        $data['counsenin'] = jam_jadwal::where('hari', 'senin')->orderBy('jam_ke', 'asc')->count();

        $data['list_selasa'] = jam_jadwal::where('hari', 'selasa')->orderBy('jam_ke', 'asc')->get();
        $data['counselasa'] = jam_jadwal::where('hari', 'selasa')->orderBy('jam_ke', 'asc')->count();

        $data['list_rabu'] = jam_jadwal::where('hari', 'rabu')->orderBy('jam_ke', 'asc')->get();
        $data['counrabu'] = jam_jadwal::where('hari', 'rabu')->orderBy('jam_ke', 'asc')->count();

        $data['list_kamis'] = jam_jadwal::where('hari', 'kamis')->orderBy('jam_ke', 'asc')->get();
        $data['counkamis'] = jam_jadwal::where('hari', 'kamis')->orderBy('jam_ke', 'asc')->count();

        $data['list_jumat'] = jam_jadwal::where('hari', 'jumat')->orderBy('jam_ke', 'asc')->get();
        $data['counjumat'] = jam_jadwal::where('hari', 'jumat')->orderBy('jam_ke', 'asc')->count();

        $data['list_sabtu'] =  jam_jadwal::where('hari', 'sabtu')->orderBy('jam_ke', 'asc')->get();
        $data['counsabtu'] = jam_jadwal::where('hari', 'sabtu')->orderBy('jam_ke', 'asc')->count();

        return view('admin.jadwal.jam', $data);
    }
    function add_jam()
    {
        $jam = new jam_jadwal;
        $jam->hari = request('hari');
        $jam->jam_ke = request('jam_ke');
        $jam->jam_awal = request('jam_awal');
        $jam->jam_akhir = request('jam_akhir');
        $jam->jam_istirahat = request('jam_istirahat');
        $jam->keterangan = request('keterangan');
        $jam->save();
        return back();
    }
    function add_jadwal()
    {
        $jadwal = new Jadwal;
        $jadwal->id_guru = request('id_guru');
        $jadwal->id_jam = request('id_jam');
        $jadwal->id_mapel = request('id_mapel');
        $jadwal->id_kelas = request('id_kelas');
        $jadwal->save();
        return back();
    }
}
