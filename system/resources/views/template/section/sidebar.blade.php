<div class="scroll-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">

        <ul id="sidebarnav">
            @if(Auth::user()->level==1)
            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('admin')}}"
                    aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                        class="hide-menu">Beranda</span></a></li>
            <li class="list-divider"></li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                aria-expanded="false"><i class="fas fa-cog"></i><span
                    class="hide-menu">Setting </span></a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                
                <li class="sidebar-item"><a href="{{url('admin/user')}}" class="sidebar-link"><span
                            class="hide-menu">
                            User
                        </span></a>
                </li>
                <li class="sidebar-item"><a href="{{url('admin/mapel')}}" class="sidebar-link"><span
                            class="hide-menu">
                            Mapel
                        </span></a>
                </li>
                <li class="sidebar-item"><a href="{{url('admin/kelas')}}" class="sidebar-link"><span
                            class="hide-menu">
                            kelas
                        </span></a>
                </li>
                
                
            </ul>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                aria-expanded="false"><i class="fas fa-align-left"></i><span
                    class="hide-menu">Jadwal </span></a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                
                <li class="sidebar-item"><a href="{{url('admin/jadwal/jam')}}" class="sidebar-link"><span
                            class="hide-menu">
                            Jam Pelajaran
                        </span></a>
                </li>
                <li class="sidebar-item"><a href="{{url('admin/jadwal')}}" class="sidebar-link"><span
                            class="hide-menu">
                            Jadwal Pelajaran
                        </span></a>
                </li>
                
                </li>
            </ul>
            
            
            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('admin/guru')}}"
                    aria-expanded="false"><i  class=" fas fa-id-badge"></i><span
                        class="hide-menu">Guru</span></a></li>
            <li class="list-divider"></li>
            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('admin/siswa')}}"
                aria-expanded="false"><i class=" fas fa-id-card"></i><span
                    class="hide-menu">Siswa</span></a></li>
            <li class="list-divider"></li>
            </li>
            @endif
            @if(Auth::user()->level==2)
            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('guru')}}"
                    aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                        class="hide-menu">Beranda</span></a></li>
            <
            @endif
            @if(Auth::user()->level==3)
            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('admin')}}"
                    aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                        class="hide-menu">Beranda</span></a></li>
            <li class="list-divider"></li>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                aria-expanded="false"><i class="fas fa-cog"></i><span
                    class="hide-menu">Setting </span></a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                
                <li class="sidebar-item"><a href="{{url('admin/user')}}" class="sidebar-link"><span
                            class="hide-menu">
                            User
                        </span></a>
                </li>
                <li class="sidebar-item"><a href="{{url('admin/mapel')}}" class="sidebar-link"><span
                            class="hide-menu">
                            Mapel
                        </span></a>
                </li>
                <li class="sidebar-item"><a href="{{url('admin/kelas')}}" class="sidebar-link"><span
                            class="hide-menu">
                            kelas
                        </span></a>
                </li>
                
                
            </ul>
            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                aria-expanded="false"><i class="fas fa-align-left"></i><span
                    class="hide-menu">Jadwal </span></a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                
                <li class="sidebar-item"><a href="{{url('admin/jadwal/jam')}}" class="sidebar-link"><span
                            class="hide-menu">
                            Jam Pelajaran
                        </span></a>
                </li>
                <li class="sidebar-item"><a href="{{url('admin/jadwal')}}" class="sidebar-link"><span
                            class="hide-menu">
                            Jadwal Pelajaran
                        </span></a>
                </li>
                
                </li>
            </ul>
            
            
            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('admin/guru')}}"
                    aria-expanded="false"><i  class=" fas fa-id-badge"></i><span
                        class="hide-menu">Guru</span></a></li>
            <li class="list-divider"></li>
            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('admin/siswa')}}"
                aria-expanded="false"><i class=" fas fa-id-card"></i><span
                    class="hide-menu">Siswa</span></a></li>
            <li class="list-divider"></li>
            </li>
            @endif
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>