@extends('template.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Manajemen Mata Pelajaran</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">admin</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">mapel</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah
                        Mapel</button>
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
                                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Kelas X IPA</h4>
                            </div>
                        </div>
                        <p></p>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Mapel</th>
                                        <th>Nama Mapel</th>
                                        <th>keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mapel_ipa as $key => $mapel_ipa)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $mapel_ipa->kode_mapel }}</td>
                                            <td>{{ $mapel_ipa->nama }}</td>
                                            <td>{{ $mapel_ipa->keterangan }}</td>
                                            <td><a href='{{ url("admin/mapel_hapus/$mapel_ipa->id") }}' type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-times"></i>
                                                </a>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#ipa_{{$mapel_ipa->id}}"><i class="fas fa-pencil-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <div id="ipa_{{$mapel_ipa->id}}" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="pl-3 pr-3" action='{{ url("admin/mapel_edit/$mapel_ipa->id") }}'
                                                            method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="username">Kode Mata Pelajaran</label>
                                                                <input class="form-control" name ="kode_mapel"
                                                                    type="text" required="" value="{{$mapel_ipa->kode_mapel}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="emailaddress">Nama Mata Pelajaran</label>
                                                                <input class="form-control" name="nama" type="text" value="{{$mapel_ipa->nama}}"
                                                                    required="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="password">Keterangan</label>
                                                                <input class="form-control" type="text"
                                                                    name="keterangan" required="" value="{{$mapel_ipa->keterangan}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password">jenis Mapel</label>
                                                                <select class="form-control" name="jenis_mapel"
                                                                    id="" >
                                                                    <option value="1" @if($mapel_ipa->jenis_mapel == 1) selcted @endif>IPA</option>
                                                                    <option value="2" @if($mapel_ipa->jenis_mapel == 2) selcted @endif>IPS</option>
                                                                    <option value="3" @if($mapel_ipa->jenis_mapel == 3) selcted @endif>Semua Jenis Mata Pelajaran
                                                                    </option>
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
                        <p></p>
                        <div class="row">
                            <div class="col-7 align-self-center">
                                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Kelas X IPS</h4>
                            </div>
                        </div>
                        <p></p>
                        <div class="table-responsive">
                            <table id="multi_col_order_1" class="table table-striped table-bordered display no-wrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Mapel</th>
                                        <th>Nama Mapel</th>
                                        <th>keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mapel_ips as $key => $mapel_ips)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $mapel_ips->kode_mapel }}</td>
                                            <td>{{ $mapel_ips->nama }}</td>
                                            <td>{{ $mapel_ips->keterangan }}</td>
                                            <td><a href='{{ url("admin/mapel_hapus/$mapel_ips->id") }}' type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-times"></i>
                                                </a>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#ips_{{$mapel_ips->id}}"><i class="fas fa-pencil-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <div id="ips_{{$mapel_ips->id}}" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="pl-3 pr-3" action='{{ url("admin/mapel_edit/$mapel_ips->id") }}'
                                                            method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="username">Kode Mata Pelajaran</label>
                                                                <input class="form-control" name ="kode_mapel"
                                                                    type="text" required="" value="{{$mapel_ips->kode_mapel}}">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="emailaddress">Nama Mata Pelajaran</label>
                                                                <input class="form-control" name="nama" type="text" value="{{$mapel_ips->nama}}"
                                                                    required="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="password">Keterangan</label>
                                                                <input class="form-control" type="text"
                                                                    name="keterangan" required="" value="{{$mapel_ips->keterangan}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password">jenis Mapel</label>
                                                                <select class="form-control" name="jenis_mapel"
                                                                    id="" >
                                                                    <option value="1" @if($mapel_ips->jenis_mapel == 1) selcted @endif>IPA</option>
                                                                    <option value="2" @if($mapel_ips->jenis_mapel == 2) selcted @endif>IPS</option>
                                                                    <option value="3" @if($mapel_ips->jenis_mapel == 3) selcted @endif>Semua Jenis Mata Pelajaran
                                                                    </option>
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
                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="pl-3 pr-3" action="{{ url('admin/mapel_create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">Kode Mata Pelajaran</label>
                            <input class="form-control" name ="kode_mapel" type="text" required="">
                        </div>

                        <div class="form-group">
                            <label for="emailaddress">Nama Mata Pelajaran</label>
                            <input class="form-control" name="nama" type="text" required="">
                        </div>

                        <div class="form-group">
                            <label for="password">Keterangan</label>
                            <input class="form-control" type="text" name="keterangan" required="">
                        </div>
                        <div class="form-group">
                            <label for="password">jenis Mapel</label>
                            <select class="form-control" name="jenis_mapel" id="">
                                <option value="1">IPA</option>
                                <option value="2">IPS</option>
                                <option value="3">Semua Jenis Mata Pelajaran</option>
                            </select>
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
