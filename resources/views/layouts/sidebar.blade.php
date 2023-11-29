@extends('layouts.admin')

@section('container')
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" style="text-align: right">
                <img src="{{url('assets/profile/avatar5.png')}}" class="img-circle" width="35px" alt="User Image">
                <span class="ml-w">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right mt-2">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{url('assets/profile/avatar5.png')}}" class="img-circle mr-3 mb-2" width="50px" alt="User Image">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                {{ Auth::user()->name }}
                            </h3>
                            <p class="text-sm"> <b>{{ Auth::user()->role }}</b></p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <!-- logout update profile start -->
                <a href="#" class="dropdown-item dropdown-footer text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <!-- logout update profile end -->

            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-success elevation-4" style="">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="text-align: center;">
        <div class="text-center mb-1">
            <img src="{{url('assets/user/img/PiT! logo 0.2.png')}}" alt="AdminLTE Logo" width="50%" style="opacity: .8">
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{url('home')}}" class="nav-link {{($title == 'Dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home"></i>
                        <p>
                            &nbsp;&nbsp;Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('artikel')}}" class="nav-link {{($title == 'Data Artikel' || $title == 'Tambah Data Artikel'  || $title == 'Edit Data Artikel' ) ? 'active' : '' }}">
                        <i class="fas fa-newspaper"></i>
                        <p>
                            &nbsp;&nbsp;Artikel
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('vidio')}}" class="nav-link {{($title == 'Data Video'  || $title == 'Edit Data Video' ) ? 'active' : '' }}">
                        <i class="fas fa-video"></i>
                        <p>
                            &nbsp;&nbsp;Vidio
                        </p>
                    </a>
                </li>

                <li class="nav-item {{($title == 'Data Tanaman Selatan'  || $title == 'Edit Data Tanaman Selatan' || $title == 'Data Tanaman Utara'  || $title == 'Edit Data Tanaman Utara') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{($title == 'Data Tanaman Selatan'  || $title == 'Edit Data Tanaman Selatan' || $title == 'Data Tanaman Utara'  || $title == 'Edit Data Tanaman Utara') ? 'active' : '' }}">

                        <i class="fas fa-map-marker-alt"></i>
                        <p>
                            &nbsp;&nbsp;Lokasi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('tanaman-selatan')}}" class="nav-link {{($title == 'Data Tanaman Selatan'  || $title == 'Edit Data Tanaman Selatan') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Selatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('tanaman-utara')}}" class="nav-link {{($title == 'Data Tanaman Utara'  || $title == 'Edit Data Tanaman Utara') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Utara</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">{{ $title }}</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
</div>
@endsection