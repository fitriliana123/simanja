@extends('template.base')
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Manajemen jadwal</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">admin</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">jadwal</li>
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" text-center">
                            <h4 class="card-title">Jadwal Pelajaran</h4>
                            <p>  
                                <h4 class="card-title"> {{$kelas->kelas}} </h4>
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        
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
                                                    <th>Alokasi Waktu</th>
                                                    <th>Mata Pelajaran / Guru</th>
                                                </tr>
                                                @foreach ($list_senin as $senin)
                                                    <tr>
                                                        <th>{{ $senin->jam_ke }}</th>
                                                        <th>{{date('h:i',strtotime($senin->jam_awal))}} - {{date('h:i',strtotime($senin->jam_akhir))}}</th>
                                                       
                                                        
                                                        <th>
                                                            @if($senin->jam_istirahat == 1)
                                                            <span class="badge rounded-pill bg-success"><b style="color: aliceblue">Istirahat</b></span>
                                                            @else
                                                                @if($senin->mapel == null)
                                                                <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#senin_{{ $senin->id }}"><i class="fas fa-plus" ></i> Kosong</button></th>
                                                                @else
                                                                <i class="fas fa-newspaper"></i> {{$senin->mapel->Mapel->nama}} <br>
                                                                <i class="fas fa-user"></i> {{$senin->mapel->Guru->nama}}
                                                                @endif
                                                            @endif
                                                    </tr>
                                                    
                                                @endforeach
                                            </table>
                                        </th>

                                    </tr>

                                    <tr>
                                        <th>2</th>
                                        <td>Selasa</td>
                                        <th>
                                            <table class="table">
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Hari</th>
                                                    <th>Jam Pelajaran</th>
            
                                                </tr>
                                            @foreach ($list_selasa as $selasa)
                                                <tr>
                                                    <th>{{ $selasa->jam_ke }}</th>
                                                    <th>{{date('h:i',strtotime($selasa->jam_awal))}} - {{date('h:i',strtotime($selasa->jam_akhir))}}</th>
                                                   
                                                    
                                                    <th>
                                                        @if($selasa->jam_istirahat == 1)
                                                        <span class="badge rounded-pill bg-success"><b style="color: aliceblue">Istirahat</b></span>
                                                        @else
                                                            @if($selasa->Jadwal == null)
                                                            <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#selasa_{{ $selasa->id }}"><i class="fas fa-plus" ></i> Kosong</button></th>
                                                            @else
                                                            <i class="fas fa-newspaper"></i> {{$selasa->Jadwal->Mapel->nama}} <br>
                                                            <i class="fas fa-user"></i> {{$selasa->Jadwal->Guru->nama}}
                                                            @endif
                                                        @endif
                                                </tr>
                                                
                                            @endforeach
                                            </table>
                                            
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Rabu</td>
                                        <th>
                                            <table class="table">
                                                <tr>
                                                    <th>Jam Ke</th>
                                                    <th>Alokasi Waktu</th>
                                                    <th>Mata Pelajaran / Guru</th>
                                                </tr>
                                            @foreach ($list_rabu as $rabu)
                                                <tr>
                                                    <th>{{ $rabu->jam_ke }}</th>
                                                    <th>{{date('h:i',strtotime($rabu->jam_awal))}} - {{date('h:i',strtotime($rabu->jam_akhir))}}</th>
                                                   
                                                    
                                                    <th>
                                                        @if($rabu->jam_istirahat == 1)
                                                        <span class="badge rounded-pill bg-success"><b style="color: aliceblue">Istirahat</b></span>
                                                        @else
                                                            @if($rabu->Jadwal == null)
                                                            <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#rabu_{{ $rabu->id }}"><i class="fas fa-plus" ></i> Kosong</button></th>
                                                            @else
                                                            <i class="fas fa-newspaper"></i> {{$rabu->Jadwal->Mapel->nama}} <br>
                                                            <i class="fas fa-user"></i> {{$rabu->Jadwal->Guru->nama}}
                                                            @endif
                                                        @endif
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
                                                    <th>Alokasi Waktu</th>
                                                    <th>Mata Pelajaran / Guru</th>
                                                </tr>
                                                @foreach ($list_kamis as $kamis)
                                                <tr>
                                                    <th>{{ $kamis->jam_ke }}</th>
                                                    <th>{{date('h:i',strtotime($kamis->jam_awal))}} - {{date('h:i',strtotime($kamis->jam_akhir))}}</th>
                                                   
                                                    
                                                    <th>
                                                        @if($kamis->jam_istirahat == 1)
                                                        <span class="badge rounded-pill bg-success"><b style="color: aliceblue">Istirahat</b></span>
                                                        @else
                                                            @if($kamis->Jadwal == null)
                                                            <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#kamis_{{ $kamis->id }}"><i class="fas fa-plus" ></i> Kosong</button></th>
                                                            @else
                                                            <i class="fas fa-newspaper"></i> {{$kamis->Jadwal->Mapel->nama}} <br>
                                                            <i class="fas fa-user"></i> {{$kamis->Jadwal->Guru->nama}}
                                                            @endif
                                                        @endif
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
                                                    <th>Alokasi Waktu</th>
                                                    <th>Mata Pelajaran / Guru</th>
                                                </tr>
                                                @foreach ($list_jumat as $jumat)
                                                <tr>
                                                    <th>{{ $jumat->jam_ke }}</th>
                                                    <th>{{date('h:i',strtotime($jumat->jam_awal))}} - {{date('h:i',strtotime($jumat->jam_akhir))}}</th>
                                                   
                                                    
                                                    <th>
                                                        @if($jumat->jam_istirahat == 1)
                                                        <span class="badge rounded-pill bg-success"><b style="color: aliceblue">Istirahat</b></span>
                                                        @else
                                                            @if($jumat->Jadwal == null)
                                                            <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#jumat_{{ $jumat->id }}"><i class="fas fa-plus" ></i> Kosong</button></th>
                                                            @else
                                                            <i class="fas fa-newspaper"></i> {{$jumat->Jadwal->Mapel->nama}} <br>
                                                            <i class="fas fa-user"></i> {{$jumat->Jadwal->Guru->nama}}
                                                            @endif
                                                        @endif
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
                                                    <th>Alokasi Waktu</th>
                                                    <th>Mata Pelajaran / Guru</th>
                                                </tr>
                                                @foreach ($list_sabtu as $sabtu)
                                                <tr>
                                                    <th>{{ $sabtu->jam_ke }}</th>
                                                    <th>{{date('h:i',strtotime($sabtu->jam_awal))}} - {{date('h:i',strtotime($sabtu->jam_akhir))}}</th>
                                                   
                                                    
                                                    <th>
                                                        @if($sabtu->jam_istirahat == 1)
                                                        <span class="badge rounded-pill bg-success"><b style="color: aliceblue">Istirahat</b></span>
                                                        @else
                                                            @if($sabtu->Jadwal == null)
                                                            <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#sabtu_{{ $sabtu->id }}"><i class="fas fa-plus" ></i> Kosong</button></th>
                                                            @else
                                                            <i class="fas fa-newspaper"></i> {{$sabtu->Jadwal->Mapel->nama}} <br>
                                                            <i class="fas fa-user"></i> {{$sabtu->Jadwal->Guru->nama}}
                                                            @endif
                                                        @endif
                                                </tr>
                                                
                                            @endforeach
                                            </table>
                                            
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
    @include('admin.jadwal.modalcekclass')
@endsection
@section('script')
@foreach($list_senin as $senin)
    <script>
        $(document).ready(function(){
            $('#mapel_{{$senin->id}}').on('change',function(){
            var guru = $(this).find('option:selected').data('guru');
            var id_guru = $(this).find('option:selected').data('id_guru');
            if(guru == null){
                $('.peringatan').text('Tidak Memiliki guru Pengampu');
            }else{
                $('#nama_guru_{{$senin->id}}').val(guru);
                $('#id_guru_{{$senin->id}}').val(id_guru);
            }
            

            });
        });
    
</script>
@endforeach
@foreach($list_selasa as $selasa)
    <script>
        $(document).ready(function(){
            $('#mapel_{{$selasa->id}}').on('change',function(){
            var guru = $(this).find('option:selected').data('guru');
            var id_guru = $(this).find('option:selected').data('id_guru');
            if(guru == null){
                $('.peringatan').text('Tidak Memiliki guru Pengampu');
            }else{
                $('#nama_guru_{{$selasa->id}}').val(guru);
                $('#id_guru').val(id_guru);
            }
            

            });
        });
    
</script>
@endforeach
@foreach($list_rabu as $rabu)
    <script>
        $(document).ready(function(){
            $('#mapel_{{$rabu->id}}').on('change',function(){
            var guru = $(this).find('option:selected').data('guru');
            var id_guru = $(this).find('option:selected').data('id_guru');
            if(guru == null){
                $('.peringatan').text('Tidak Memiliki guru Pengampu');
            }else{
                $('#nama_guru_{{$rabu->id}}').val(guru);
                $('#id_guru').val(id_guru);
            }
            

            });
        });
    
</script>
@endforeach
@foreach($list_kamis as $kamis)
    <script>
        $(document).ready(function(){
            $('#mapel_{{$kamis->id}}').on('change',function(){
            var guru = $(this).find('option:selected').data('guru');
            var id_guru = $(this).find('option:selected').data('id_guru');
            if(guru == null){
                $('.peringatan').text('Tidak Memiliki guru Pengampu');
            }else{
                $('#nama_guru_{{$kamis->id}}').val(guru);
                $('#id_guru').val(id_guru);
            }
            

            });
        });
    
</script>
@endforeach
@foreach($list_jumat as $jumat)
    <script>
        $(document).ready(function(){
            $('#mapel_{{$jumat->id}}').on('change',function(){
            var guru = $(this).find('option:selected').data('guru');
            var id_guru = $(this).find('option:selected').data('id_guru');
            if(guru == null){
                $('.peringatan').text('Tidak Memiliki guru Pengampu');
            }else{
                $('#nama_guru_{{$jumat->id}}').val(guru);
                $('#id_guru').val(id_guru);
            }
            

            });
        });
    
</script>
@endforeach
@foreach($list_sabtu as $sabtu)
    <script>
        $(document).ready(function(){
            $('#mapel_{{$sabtu->id}}').on('change',function(){
            var guru = $(this).find('option:selected').data('guru');
            var id_guru = $(this).find('option:selected').data('id_guru');
            if(guru == null){
                $('.peringatan').text('Tidak Memiliki guru Pengampu');
            }else{
                $('#nama_guru_{{$sabtu->id}}').val(guru);
                $('#id_guru_{{$sabtu->id}}').val(id_guru);
            }
            

            });
        });
    
</script>
@endforeach
@endsection
