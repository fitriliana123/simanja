@extends('template.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar guru</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">admin</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">guru</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah
                        guru</button>
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
                                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Guru Kelas
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
                                        <th>Nama Guru</th>
                                        <th>NIP</th>
                                        <th>Mata pelajaran</th>
                                        <th>No Telepon</th>
                                        <th>E-Mail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_guru as $key => $guru)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $guru->nama }}</td>
                                            <td>{{ $guru->nip }}</td>
                                            <td>@if($guru->Mapel == null)
                                                tidak ada dafatr mapel
                                                @else
                                                {{ $guru->Mapel->nama }}
                                                @endif
                                            </td>
                                            <td>{{ $guru->no_telp }}</td>
                                            <td>{{ $guru->email }}</td>
                                            <td><a href='{{ url("admin/guru_hapus/$guru->id") }}' type="button"
                                                    class="btn btn-danger btn-sm"><i class="fa fa-times"></i>
                                                </a>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#guru_{{ $guru->id }}"><i
                                                        class="fas fa-pencil-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <div id="guru_{{ $guru->id }}" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="pl-3 pr-3"
                                                            action='{{ url("admin/guru_edit/$guru->id") }}' method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Nama Guru</label>
                                                                <input class="form-control" name="nama" type="text"
                                                                    required="" value="{{ $guru->nama }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label> NIP</label>
                                                                <input class="form-control" name="nip" type="text"
                                                                    required="" value="{{ $guru->nip }}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Mata Pelajaran</label>
                                                                <select name="id_mapel" id="" class="form-control">
                                                                    <option value="">--Pilih --</option>
                                                                    @foreach ($list_mapel as $mapel)
                                                                        <option value="{{ $mapel->id }}"
                                                                            @if ($guru->mata_pelajaran == $mapel->id) selected @endif>
                                                                            {{ $mapel->kode_mapel }} | {{ $mapel->nama }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nomor Telepon</label>
                                                                <input class="form-control" type="text" name="no_tlp"
                                                                    required="" value="{{ $guru->no_telp }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input class="form-control" type="text" name="email"
                                                                    required="" value="{{ $guru->email }}">
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

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Tambah Daftar Guru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="pl-3 pr-3" action="{{ url('admin/guru_create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input class="form-control" name="nama" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label> NIP</label>
                            <input class="form-control" name="nip" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label>Mata Pelajaran</label>
                            <select name="id_mapel" id="" class="form-control">
                                <option value="">--Pilih --</option>
                                @foreach ($list_mapel as $mapel)
                                    <option value="{{ $mapel->id }}">{{ $mapel->kode_mapel }} | {{ $mapel->nama }}
                                    </option>
                                @endforeach
                            </select>
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
                            <label>username</label>
                            <input class="form-control" type="text" name="username" required="">
                        </div>
                        <div class="form-group">
                            <label>password</label>
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
