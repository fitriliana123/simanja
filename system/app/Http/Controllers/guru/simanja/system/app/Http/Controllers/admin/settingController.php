<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use App\Models\kelas;
use Illuminate\Http\Request;

class settingController extends Controller
{
    function mapel_index(){
        $data['list_mapel_ipa'] = Mapel::where('jenis_mapel', 1)->orWhere('jenis_mapel', 3)->get();
        $data['list_mapel_ips'] = Mapel::where('jenis_mapel', 2)->orWhere('jenis_mapel', 3)->get();
        return view('admin.setting.mapel',$data);
    }
    function mapel_create(){
        $mapel = new Mapel;
        $mapel->kode_mapel = request('kode_mapel');
        $mapel->nama= request('nama');
        $mapel->keterangan = request('keterangan');
        $mapel->jenis_mapel = request('jenis_mapel');
        $mapel->save();
        return back()->with('berhasi','mata pelajaran berhasil ditambahkan');
    }
    function mapel_edit($id){
        $mapel = Mapel::find($id);
        $mapel->kode_mapel = request('kode_mapel');
        $mapel->nama= request('nama');
        $mapel->keterangan = request('keterangan');
        $mapel->jenis_mapel = request('jenis_mapel');
        $mapel->save();
        return back()->with('berhasi','mata pelajaran berhasil ditambahkan');
    }
    function mapel_hapus($id){
        Mapel::destroy($id);
        return back()->with('berhasi','mata pelajaran berhasil ditambahkan');
    }
    //kelas
    function kelas_index(){
        $data['list_kelas'] = kelas::all();
        return view('admin.setting.kelas',$data);
    }
    function kelas_create(){
        $kelas = new kelas;
        $kelas->kelas= request('kelas');
        $kelas->keterangan = request('keterangan');
        $kelas->save();
        return back()->with('berhasi','mata pelajaran berhasil ditambahkan');
    }
    function kelas_edit($id){
        $kelas = kelas::find($id);
        $kelas->kelas= request('kelas');
        $kelas->keterangan = request('keterangan');
        $kelas->save();
        return back()->with('berhasi','mata pelajaran berhasil ditambahkan');
    }
    function kelas_hapus($id){
        kelas::destroy($id);
        return back()->with('berhasi','mata pelajaran berhasil ditambahkan');
    }
}
