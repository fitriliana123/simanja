@extends('template.base')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Selamat Datang
                    {{ Auth::user()->nama }}!</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            {{-- <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div> --}}
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- *************************************************************** -->
        <!-- Start First Cards -->
        <!-- *************************************************************** -->
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">{{ $siswa }}</h2>

                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah Siswa</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i class="fas fa-users"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                    class="set-doller"></sup>{{ $guru }}</h2>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah Guru
                            </h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i class="far fa-user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">{{ $kelas }}</h2>

                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">jumlah Kelas</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                        </div>
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
                                <h4 class="card-title"> Saya </h4>
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
                                        <th>Jadwal Saya</th>
    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Senin</td>
                                        <th>
                                            <table class="table">
                                                <tr>
                                                    <th>Mata Pelajaran</th>
                                                    <th>Jam Pelajaran</th>
                                                    <th>Aksi</th>
                                                </tr>
                                                @foreach($list_jadwal as $jadwal)
                                                <tr>
                                                    <td>{{$jadwal->Mapel->nama}}</td>
                                                    <td>{{date('h:i',strtotime($jadwal->Jam->jam_awal))}} s/d {{date('h:i',strtotime($jadwal->Jam->jam_akhir))}}</td>
                                                    <td> <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#primary-header-modal">Absen</button></td>
                                                </tr>
                                                <div id="primary-header-modal" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-colored-header bg-primary">
                                                            <h4 class="modal-title" id="primary-header-modalLabel">Scan Barcode Untuk Absen
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body" style="text-align: center">
                                                           
                                                                {!! $qrcode !!}
                                                          
                                                        </div>
                                                        <div class="modal-footer">
                                                            
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                                @endforeach
                                                
                                            </table>
                                        </th>
    
                                    </tr>
    
                                    <tr>
                                        <th>2</th>
                                        <td>Selasa</td>
                                        <th>
                                           
                                            
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Rabu</td>
                                        <th>
                                          
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Kamis</td>
                                        <th>
                                            
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Jumat</td>
                                        <th>
                                            
                                           
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td>Sabtu</td>
                                        <th>
                                           
                                            
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
    
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center text-muted">
        SMA 2 KETAPANG by <a href="">Fitriliana</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
@endsection
