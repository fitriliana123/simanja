<div id="senin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/jam/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="senin" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{ $counsenin + 1 }}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Jam Istirahat</label>
                        <select id="inputState" name="jam_istirahat" class="form-control">
                            <option value="1">Ya</option>
                            <option value="">Tidak</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Keterangan</label>
                        <input name="keterangan" id="inputCity" class="form-control">

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
<div id="selasa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/jam/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="selasa" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{ $counselasa + 1 }}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Jam Istirahat</label>
                        <select id="inputState" name="jam_istirahat" class="form-control">
                            <option value="1">Ya</option>
                            <option value="">Tidak</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Keterangan</label>
                        <input name="keterangan" id="inputCity" class="form-control">

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
<div id="rabu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/jam/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="rabu" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{ $counrabu + 1 }}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Jam Istirahat</label>
                        <select id="inputState" name="jam_istirahat" class="form-control">
                            <option value="1">Ya</option>
                            <option value="">Tidak</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Keterangan</label>
                        <input name="keterangan" id="inputCity" class="form-control">

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
<div id="kamis" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/jam/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="kamis" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{ $counkamis + 1 }}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Jam Istirahat</label>
                        <select id="inputState" name="jam_istirahat" class="form-control">
                            <option value="1">Ya</option>
                            <option value="">Tidak</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Keterangan</label>
                        <input name="keterangan" id="inputCity" class="form-control">

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
<div id="jumat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/jam/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="jumat" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{ $counjumat + 1 }}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Jam Istirahat</label>
                        <select id="inputState" name="jam_istirahat" class="form-control">
                            <option value="1">Ya</option>
                            <option value="">Tidak</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Keterangan</label>
                        <input name="keterangan" id="inputCity" class="form-control">

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
<div id="sabtu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Jam Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3 row g-3 " action='{{ url('admin/jadwal/jam/create') }}' method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Hari</label>
                        <input type="text" class="form-control" name="hari" value="sabtu" readonly
                            id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam ke</label>
                        <input type="text" class="form-control" name="jam_ke" readonly value="{{ $counsabtu + 1 }}"
                            id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" name="jam_awal" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Jam Akhir</label>
                        <input type="time" name="jam_akhir" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Jam Istirahat</label>
                        <select id="inputState" name="jam_istirahat" class="form-control">
                            <option value="1">Ya</option>
                            <option value="">Tidak</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Keterangan</label>
                        <input name="keterangan" id="inputCity" class="form-control">

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