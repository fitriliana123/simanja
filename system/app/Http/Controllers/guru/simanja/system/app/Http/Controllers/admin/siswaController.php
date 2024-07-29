<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use App\Models\kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    function siswa_index()
        {
            $data['list_siswa'] = Siswa::all();
            $data['list_kelas'] = kelas::all();
            return view('admin.siswa.index', $data);
        }
    function siswa_create()
        {
            $siswa = new Siswa;
            $siswa->nama_lengkap = request('nama');
            $siswa->tanggal_lahir = request('tanggal_lahir');
            $siswa->Jenis_kelamin = request('jenis_kelamin');
            $siswa->alamat = request('alamat');
            $siswa->nomor_telepon = request('no_tlp');
            $siswa->email = request('email');
            $siswa->kelas = request('id_kelas');
            $siswa->save();
                $user = new User;
                $user->nama = request('nama');
                $user->email = request('email');
                $user->username = request('username'); 
                $user->password = bcrypt(request('password'));
                $user->id_user = $siswa->id;
                $user->level = 3;
                $user->save();
            return back()->with('berhasi', 'Daftar Guru berhasil ditambahkan');
        }

    function siswa_edit($id)
        {
            $siswa = Siswa::find($id);
            $siswa->nama_lengkap = request('nama');
            $siswa->tanggal_lahir = request('tanggal_lahir');
            $siswa->Jenis_kelamin = request('jenis_kelamin');
            $siswa->alamat = request('alamat');
            $siswa->nomor_telepon = request('no_tlp');
            $siswa->email = request('email');
            $siswa->kelas = request('id_kelas');
            $siswa->save();
            return back()->with('berhasi', 'mata pelajaran berhasil ditambahkan');
        }
    function siswa_hapus($id)
        {
            Siswa::destroy($id);
            return back()->with('berhasi', 'mata pelajaran berhasil ditambahkan');
        }
}
