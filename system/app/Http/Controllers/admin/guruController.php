<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use App\Models\guru;
use App\Models\User;
use Illuminate\Http\Request;

class guruController extends Controller
{
    function guru_index()
    {
        $data['list_mapel'] = Mapel::all();
        $data['list_guru'] = guru::all();
        return view('admin.guru.index', $data);
    }
    function guru_create()
    {
        $guru = new guru;
        $guru->nama = request('nama');
        $guru->nip = request('nip');
        $guru->mata_pelajaran = request('id_mapel');
        $guru->no_telp = request('no_tlp');
        $guru->email = request('email');
        $guru->save();
            $user = new User;
            $user->nama = request('nama');
            $user->email = request('email');
            $user->username = request('username'); 
            $user->password = bcrypt(request('password'));
            $user->id_user = $guru->id;
            $user->level = 2;
            $user->save();
        return back()->with('berhasi', 'Daftar Guru berhasil ditambahkan');
    }
    function guru_edit($id)
    {
        $guru = guru::find($id);
        $guru->nama = request('nama');
        $guru->nip = request('nip');
        $guru->mata_pelajaran = request('id_mapel');
        $guru->no_telp = request('no_tlp');
        $guru->email = request('email');
        $guru->save();
        return back()->with('berhasi', 'mata pelajaran berhasil ditambahkan');
    }
    function guru_hapus($id)
    {
        guru::destroy($id);
        return back()->with('berhasi', 'mata pelajaran berhasil ditambahkan');
    }
}
