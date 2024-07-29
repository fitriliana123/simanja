@extends('template.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Siswa</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">admin</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Siswa</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah
                        Siswa
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7 align-self-center">
                                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Siswa
                                </h4>
                            </div>
                        </div>
                        <p></p>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>E-Mail</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_siswa as $key => $siswa)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $siswa->nama_lengkap }}</td>
                                            <td>{{ $siswa->tanggal_lahir }}</td>
                                            <td>{{ $siswa->jenis_kelamin }}</td>
                                            <td>{{ $siswa->alamat }}</td>
                                            <td>{{ $siswa->nomor_telepon }}</td>
                                            <td>{{ $siswa->email }}</td>
                                            <td>
                                                @if ($siswa->Kelas == null)
                                                    Kelas Tidak Ditemukan
                                                @else
                                                    {{ $siswa->Kelas->kelas }}
                                                @endif
                                            </td>

                                            <td><a href='{{ url("admin/siswa_hapus/$siswa->id") }}' type="button"
                                                    class="btn btn-danger btn-sm"><i class="fa fa-times"></i>
                                                </a>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#siswa_{{ $siswa->id }}"><i
                                                        class="fas fa-pencil-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <div id="siswa_{{ $siswa->id }}" class="modal fade" tabindex="-1"
                                            role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="pl-3 pr-3"
                                                            action='{{ url("admin/siswa_edit/$siswa->id") }}'
                                                            method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Nama Siswa</label>
                                                                <input class="form-control" name="nama" type="text"
                                                                    required="" value="{{ $siswa->nama_lengkap }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Tanggal lahir</label>
                                                                <input class="form-control" name="tanggal_lahir"
                                                                    type="date" required=""
                                                                    value="{{ $siswa->tanggal_lahir }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Jenis Kelamin</label>
                                                                <select name="jenis_kelamin" id=""
                                                                    class="form-control">
                                                                    <option value="">--Pilih --</option>
                                                                    <option value="1"
                                                                        @if ($siswa->jenis_kelamin == 'Laki-Laki') selected @endif>
                                                                        Laki - Laki</option>
                                                                    <option value="2"
                                                                        @if ($siswa->jenis_kelamin == 'Perempuan') selected @endif>
                                                                        Perempuan</option>

                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <input class="form-control" type="text" name="alamat"
                                                                    required="" value="{{ $siswa->alamat }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nomor Telepon</label>
                                                                <input class="form-control" type="text" name="no_tlp"
                                                                    required="" value="{{ $siswa->nomor_telepon }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input class="form-control" type="text" name="email"
                                                                    required="" value="{{ $siswa->email }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kelas</label>
                                                                <select name="id_kelas" id="" class="form-control">
                                                                    <option value="">--Pilih --</option>
                                                                    @foreach ($list_kelas as $kelas)
                                                                        <option value="{{ $kelas->id }}"
                                                                            @if ($siswa->kelas == $kelas->id) selected @endif>
                                                                            {{ $kelas->kelas }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Daftar Siswa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="pl-3 pr-3" action='{{ url('admin/siswa_create') }}' method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input class="form-control" name="nama" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label>Tanggal lahir</label>
                            <input class="form-control" name="tanggal_lahir" type="date" required="">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="">--Pilih --</option>
                                <option value="1">Laki - Laki</option>
                                <option value="2">Perempuan</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control" type="text" name="alamat" required="">
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input class="form-control" type="text" name="no_tlp" required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" required="">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <select name="id_kelas" id="" class="form-control">
                                <option value="">--Pilih --</option>
                                @foreach ($list_kelas as $kelas)
                                    <option value="{{ $kelas->id }}"> {{ $kelas->kelas }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username" required="">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" required="">
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
@endsection
