@extends('template.base')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Manajemen Jadwal</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">admin</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Jadwal</li>
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
                        <form action='{{ url('admin/jadwal/cek') }}' method="get">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Kelas</label>
                                            <select name="kelas" id="" class="form-control">
                                                <option value="">-- Pilih --</option>
                                                @foreach ($list_kelas as $item)
                                                <option value="{{$item->id}}">{{$item->kelas}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <p></p>
                            <div class="form-actions">
                                <div class="text-left">
                                    <button type="submit" class="btn btn-info"><i class="far fa-window-restore"></i> Tampilkan</button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
