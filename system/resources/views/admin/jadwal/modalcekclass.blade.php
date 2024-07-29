@foreach($list_senin as $senin)
<div id="senin_{{$senin->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="senin" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{$senin->jam_ke}}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4" readonly value="{{date('h:i',strtotime($senin->jam_awal))}}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4" readonly value="{{date('h:i',strtotime($senin->jam_akhir))}}">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Kelas</label>
                        <select id="inputState" readonly class="form-control">
                            <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                        </select>
                    </div>
            
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Mapel</label>
                        <select id="mapel_{{$senin->id}}" name="id_mapel" class="form-control">
                            <option value="">-- Pilih --</option>
                            @foreach($list_mapel as $mapel)
                            <option value="{{$mapel->id}}" 
                                @if($mapel->Guru) data-guru="{{$mapel->Guru->nama}}" data-id_guru="{{$mapel->Guru->id}}"  @endif  >{{$mapel->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Nama Guru</label>
                        <input type="text" id="nama_guru_{{$senin->id}}" name="nama_guru" class="form-control">
                        <input type="hidden" id="id_guru_{{$senin->id}}" name="id_guru" class="form-control">
                        <input type="hidden" value="{{$senin->id}}" name="id_jam" class="form-control">
                        <input type="hidden" value="{{$kelas->id}}" name="id_kelas" class="form-control">
                        <small class="text-danger peringatan" ></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endforeach

@foreach($list_selasa as $selasa)
<div id="selasa_{{$selasa->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="selasa" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{$selasa->jam_ke}}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4" readonly value="{{date('h:i',strtotime($selasa->jam_awal))}}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4" readonly value="{{date('h:i',strtotime($selasa->jam_akhir))}}">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Kelas</label>
                        <select id="inputState" readonly class="form-control">
                            <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                        </select>
                    </div>
            
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Mapel</label>
                        <select id="mapel_{{$selasa->id}}" name="id_mapel" class="form-control">
                            <option value="">-- Pilih --</option>
                            @foreach($list_mapel as $mapel)
                            <option value="{{$mapel->id}}" 
                                @if($mapel->Guru) data-guru="{{$mapel->Guru->nama}}" data-id_guru="{{$mapel->Guru->id}}"  @endif  >{{$mapel->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Nama Guru</label>
                        <input type="text" id="nama_guru_{{$selasa->id}}" name="nama_guru" class="form-control">
                        <input type="hidden" id="id_guru_{{$selasa->id}}" name="id_guru" class="form-control">
                        <input type="hidden" value="{{$selasa->id}}" name="id_jam" class="form-control">
                        <input type="hidden" value="{{$kelas->id}}" name="id_kelas" class="form-control">
                        <small class="text-danger" id="peringatan"></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endforeach

@foreach($list_rabu as $rabu)
<div id="rabu_{{$rabu->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="rabu" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{$rabu->jam_ke}}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4" readonly value="{{date('h:i',strtotime($rabu->jam_awal))}}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4" readonly value="{{date('h:i',strtotime($rabu->jam_akhir))}}">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Kelas</label>
                        <select id="inputState" readonly class="form-control">
                            <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                        </select>
                    </div>
            
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Mapel</label>
                        <select id="mapel_{{$rabu->id}}" name="id_mapel" class="form-control">
                            <option value="">-- Pilih --</option>
                            @foreach($list_mapel as $mapel)
                            <option value="{{$mapel->id}}" 
                                @if($mapel->Guru) data-guru="{{$mapel->Guru->nama}}" data-id_guru="{{$mapel->Guru->id}}"  @endif  >{{$mapel->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Nama Guru</label>
                        <input type="text" id="nama_guru_{{$rabu->id}}" name="nama_guru" class="form-control">
                        <input type="hidden" id="id_guru_{{$rabu->id}}" name="id_guru" class="form-control">
                        <input type="hidden" value="{{$rabu->id}}" name="id_jam" class="form-control">
                        <input type="hidden" value="{{$kelas->id}}" name="id_kelas" class="form-control">
                        <small class="text-danger" id="peringatan"></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endforeach

@foreach($list_kamis as $kamis)
<div id="kamis_{{$kamis->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="kamis" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{$kamis->jam_ke}}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4" readonly value="{{date('h:i',strtotime($kamis->jam_awal))}}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4" readonly value="{{date('h:i',strtotime($kamis->jam_akhir))}}">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Kelas</label>
                        <select id="inputState" readonly class="form-control">
                            <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                        </select>
                    </div>
            
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Mapel</label>
                        <select id="mapel_{{$kamis->id}}" name="id_mapel" class="form-control">
                            <option value="">-- Pilih --</option>
                            @foreach($list_mapel as $mapel)
                            <option value="{{$mapel->id}}" 
                                @if($mapel->Guru) data-guru="{{$mapel->Guru->nama}}" data-id_guru="{{$mapel->Guru->id}}"  @endif  >{{$mapel->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Nama Guru</label>
                        <input type="text" id="nama_guru_{{$kamis->id}}" name="nama_guru" class="form-control">
                        <input type="hidden" id="id_guru_{{$kamis->id}}" name="id_guru" class="form-control">
                        <input type="hidden" value="{{$kamis->id}}" name="id_jam" class="form-control">
                        <input type="hidden" value="{{$kelas->id}}" name="id_kelas" class="form-control">
                        <small class="text-danger" id="peringatan"></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endforeach

@foreach($list_jumat as $jumat)
<div id="jumat_{{$jumat->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="jumat" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{$jumat->jam_ke}}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4" readonly value="{{date('h:i',strtotime($jumat->jam_awal))}}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4" readonly value="{{date('h:i',strtotime($jumat->jam_akhir))}}">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Kelas</label>
                        <select id="inputState" readonly class="form-control">
                            <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                        </select>
                    </div>
            
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Mapel</label>
                        <select id="mapel_{{$jumat->id}}" name="id_mapel" class="form-control">
                            <option value="">-- Pilih --</option>
                            @foreach($list_mapel as $mapel)
                            <option value="{{$mapel->id}}" 
                                @if($mapel->Guru) data-guru="{{$mapel->Guru->nama}}" data-id_guru="{{$mapel->Guru->id}}"  @endif  >{{$mapel->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Nama Guru</label>
                        <input type="text" id="nama_guru_{{$jumat->id}}" name="nama_guru" class="form-control">
                        <input type="hidden" id="id_guru_{{$jumat->id}}" name="id_guru" class="form-control">
                        <input type="hidden" value="{{$jumat->id}}" name="id_jam" class="form-control">
                        <input type="hidden" value="{{$kelas->id}}" name="id_kelas" class="form-control">
                        <small class="text-danger" id="peringatan"></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endforeach

@foreach($list_sabtu as $sabtu)
<div id="sabtu_{{$sabtu->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="sabtu" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{$sabtu->jam_ke}}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4" readonly value="{{date('h:i',strtotime($sabtu->jam_awal))}}">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4" readonly value="{{date('h:i',strtotime($sabtu->jam_akhir))}}">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Kelas</label>
                        <select id="inputState" readonly class="form-control">
                            <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                        </select>
                    </div>
            
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Mapel</label>
                        <select id="mapel_{{$sabtu->id}}" name="id_mapel" class="form-control">
                            <option value="">-- Pilih --</option>
                            @foreach($list_mapel as $mapel)
                            <option value="{{$mapel->id}}" 
                                @if($mapel->Guru) data-guru="{{$mapel->Guru->nama}}" data-id_guru="{{$mapel->Guru->id}}"  @endif  >{{$mapel->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Nama Guru</label>
                        <input type="text" id="nama_guru_{{$sabtu->id}}" name="nama_guru" class="form-control">
                        <input type="hidden" id="id_guru_{{$sabtu->id}}" name="id_guru" class="form-control">
                        <input type="hidden" value="{{$sabtu->id}}" name="id_jam" class="form-control">
                        <input type="hidden" value="{{$kelas->id}}" name="id_kelas" class="form-control">
                        <small class="text-danger" id="peringatan"></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endforeach