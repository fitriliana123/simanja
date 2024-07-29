@extends('template.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Kelas</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">admin</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">kelas</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah
                        kelas</button>
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
                                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Kelas X</h4>
                            </div>
                        </div>
                        <p></p>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kelas</th>
                                        <th>keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_kelas as $key => $kelas)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $kelas->kelas }}</td>
                                            <td>{{ $kelas->keterangan }}</td>
                                            <td><a href='{{ url("admin/kelas_hapus/$kelas->id") }}' type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-times"></i>
                                                </a>
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#kelas_{{$kelas->id}}"><i class="fas fa-pencil-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <div id="kelas_{{$kelas->id}}" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="pl-3 pr-3" action='{{ url("admin/kelas_edit/$kelas->id") }}'
                                                            method="POST">
                                                            @csrf

                                                            <div class="form-group">
                                                                <label for="emailaddress">Nama Kelas</label>
                                                                <input class="form-control" name="kelas" type="text" value="{{$kelas->kelas}}"
                                                                    required="">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="password">Keterangan</label>
                                                                <input class="form-control" type="text"
                                                                    name="keterangan" required="" value="{{$kelas->keterangan}}">
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
                    <form class="pl-3 pr-3" action="{{ url('admin/kelas_create') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="emailaddress">Nama Kelas</label>
                            <input class="form-control" name="kelas" type="text" required="">
                        </div>

                        <div class="form-group">
                            <label for="password">Keterangan</label>
                            <input class="form-control" type="text" name="keterangan" required="">
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
