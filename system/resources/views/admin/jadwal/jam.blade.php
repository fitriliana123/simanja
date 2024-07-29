@extends('template.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Jam Pelajaran</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">admin</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">user</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <h4 class="card-title">Semua Jam Pelajaran</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Hari</th>
                                        <th>Jam Pelajaran</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Senin</td>
                                        <th>
                                            <table class="table">
                                                <tr>
                                                    <th>Jam Ke</th>
                                                    <th>Jam Awal</th>
                                                    <th>jam Akhir</th>
                                                    <th>Keterangan</th>
                                                    <th>Edit</th>
                                                </tr>
                                                @foreach ($list_senin as $senin)
                                                    <tr>
                                                        <th>{{ $senin->jam_ke }}</th>
                                                        <th>{{ $senin->jam_awal }}</th>
                                                        <th>{{ $senin->jam_akhir }}</th>
                                                        <th>{{ $senin->keterangan }}</th>
                                                        <th><button href="" class="btn btn-warning"><i
                                                                    class="fas fa-pencil-alt"></i> Edit</button></th>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#senin">Tambah
                                                jam Pelajaran</button>
                                        </th>

                                    </tr>

                                    <tr>
                                        <th>2</th>
                                        <td>Selasa</td>
                                        <th>
                                            <table class="table">
                                                <tr>
                                                    <th>Jam Ke</th>
                                                    <th>Jam Awal</th>
                                                    <th>jam Akhir</th>
                                                    <th>Keterangan</th>
                                                    <th>Edit</th>
                                                </tr>
                                                @foreach ($list_selasa as $selasa)
                                                    <tr>
                                                        <th>{{ $selasa->jam_ke }}</th>
                                                        <th>{{ $selasa->jam_awal }}</th>
                                                        <th>{{ $selasa->jam_akhir }}</th>
                                                        <th>{{ $selasa->keterangan }}</th>
                                                        <th><button href="" class="btn btn-warning"><i
                                                                    class="fas fa-pencil-alt"></i> Edit</button></th>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#selasa">Tambah
                                                jam Pelajaran</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Rabu</td>
                                        <th>
                                            <table class="table">
                                                <tr>
                                                    <th>Jam Ke</th>
                                                    <th>Jam Awal</th>
                                                    <th>jam Akhir</th>
                                                    <th>Keterangan</th>
                                                    <th>Edit</th>
                                                </tr>
                                                @foreach ($list_rabu as $rabu)
                                                    <tr>
                                                        <th>{{ $rabu->jam_ke }}</th>
                                                        <th>{{ $rabu->jam_awal }}</th>
                                                        <th>{{ $rabu->jam_akhir }}</th>
                                                        <th>{{ $rabu->keterangan }}</th>
                                                        <th><button href="" class="btn btn-warning"><i
                                                                    class="fas fa-pencil-alt"></i> Edit</button></th>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#rabu">Tambah
                                                jam Pelajaran</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Kamis</td>
                                        <th>
                                            <table class="table">
                                                <tr>
                                                    <th>Jam Ke</th>
                                                    <th>Jam Awal</th>
                                                    <th>jam Akhir</th>
                                                    <th>Keterangan</th>
                                                    <th>Edit</th>
                                                </tr>
                                                @foreach ($list_kamis as $kamis)
                                                    <tr>
                                                        <th>{{ $kamis->jam_ke }}</th>
                                                        <th>{{ $kamis->jam_awal }}</th>
                                                        <th>{{ $kamis->jam_akhir }}</th>
                                                        <th>{{ $kamis->keterangan }}</th>
                                                        <th><button href="" class="btn btn-warning"><i
                                                                    class="fas fa-pencil-alt"></i> Edit</button></th>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#kamis">Tambah
                                                jam Pelajaran</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Jumat</td>
                                        <th>
                                            <table class="table">
                                                <tr>
                                                    <th>Jam Ke</th>
                                                    <th>Jam Awal</th>
                                                    <th>jam Akhir</th>
                                                    <th>Keterangan</th>
                                                    <th>Edit</th>
                                                </tr>
                                                @foreach ($list_jumat as $jumat)
                                                    <tr>
                                                        <th>{{ $jumat->jam_ke }}</th>
                                                        <th>{{ $jumat->jam_awal }}</th>
                                                        <th>{{ $jumat->jam_akhir }}</th>
                                                        <th>{{ $jumat->keterangan }}</th>
                                                        <th><button href="" class="btn btn-warning"><i
                                                                    class="fas fa-pencil-alt"></i> Edit</button></th>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#jumat">Tambah
                                                jam Pelajaran</button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td>Sabtu</td>
                                        <th>
                                            <table class="table">
                                                <tr>
                                                    <th>Jam Ke</th>
                                                    <th>Jam Awal</th>
                                                    <th>jam Akhir</th>
                                                    <th>Keterangan</th>
                                                    <th>Edit</th>
                                                </tr>
                                                @foreach ($list_sabtu as $sabtu)
                                                <tr>
                                                    <th>{{ $sabtu->jam_ke }}</th>
                                                    <th>{{ $sabtu->jam_awal }}</th>
                                                    <th>{{ $sabtu->jam_akhir }}</th>
                                                    <th>{{ $sabtu->keterangan }}</th>
                                                    <th><button href="" class="btn btn-warning"><i
                                                                class="fas fa-pencil-alt"></i> Edit</button></th>
                                                </tr>
                                                @endforeach
                                            </table>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#sabtu">Tambah
                                                jam Pelajaran</button>
                                        </th>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.jadwal.modal')
@endsection
