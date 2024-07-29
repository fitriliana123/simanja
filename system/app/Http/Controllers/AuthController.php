<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    function login()
    {
        return view('login');
    }
    function prosesLogin()
    {
        if (Auth::attempt(['username' => request('username'), 'password' => request('password'), 'level' => 1])) {
            return redirect('admin')->with('welcome', 'informasi login');
        } elseif (Auth::attempt(['username' => request('username'), 'password' => request('password'), 'level' => 2])) {
            return redirect('guru')->with('welcome', 'informasi login');
        } else {
            return back();
        }
    }
    function register()
    {
        $data['list_seksi'] = seksi::all();
        return view('auth.register', $data);
    }
    function daftar()
    {
        $cekUser = User::where('username', request('username'))->count();
        if ($cekUser > 0) {
            return back()->with('terdeteksi', 'terdeteksi');
        } else {
            $user = new User;
            $user->nama = request('nama');
            $user->nip = request('nip');
            $user->jabatan = request('jabatan');
            $user->seksi = request('seksi');
            $user->banned = '0';
            $user->kepala_kantor = '0';
            $user->level = request('level');
            $user->username = request('username');
            $user->password = bcrypt(request('password'));
            $user->kode_kppn = request('kode_kppn');
            $user->save();
            return back()->with('berhasil', 'berhasil registrasi');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Anda berhasil logout');
    }
    function show()
    {
        $user = \Auth::User();

        $data['list_user'] = User::where('kode_kppn', $user->kode_kppn)->get();
        $data['list_seksi'] = seksi::all();
        return view('auth.data', $data);
    }
    function ubahLevel($level, $id)
    {
        $data = User::find($id);
        switch ($level) {
            case '0':
                $data->level = $level;
                $data->kepala_kantor = '1';
                $data->save();
                break;

            default:
                $data->level = $level;
                $data->kepala_kantor = '0';
                $data->save();
                break;
        }

        return back()->with('level', 'level');
    }
    function ubahStatus($status, $id)
    {
        $data = User::find($id);
        $data->banned = $status;
        $data->save();
        return back()->with('status', 'status');
    }
    function hapus($id)
    {
        User::destroy($id);
        return back()->with('hapus', 'berhasil');
    }
    function profil()
    {
        return view('auth.editProfil');
    }
    function updateProfil()
    {
        $user = \Auth::user();
        if (Hash::check(request('old_password'), $user->password)) {
            $user->username = request('username');
            $user->password = bcrypt(request('confirm_password'));
            $user->save();
            return back()->with('good', '1');
        } else {
            return back()->with('salah password', '2');
        }
    }
}
