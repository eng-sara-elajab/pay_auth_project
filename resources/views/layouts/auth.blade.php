<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('assets/puymodal.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:white">
                    <div class="container">

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ $admin->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <div class="dropdown-item" style="display:inline">
                                                <span class="fas fa-sign-out-alt"></span>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="{{ route('logout') }}" style="color: black;display: inline"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                            </div>

                                            <div class="dropdown-item">
                                                <span class="fas fa-user"></span>
                                                <a class="dropdown-item" href="/profile" style="display: inline">Profile</a>
                                            </div>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Authentication Links -->
                @guest
                    <!-- Main Sidebar Container -->
                        <aside class="main-sidebar elevation-4" style="background-color: #00003f;">
                            <!-- Brand Logo -->
                            <a href="#" class="brand-link"><br>
                                <img src="{{asset('uploads\logo\logo.png')}}" style="margin-left:70px; width: 65px" alt="AdminLTE Logo" class="brand-image img-circle elevation-4"
                                     style="opacity: .8">
                            </a>
                            <!-- Sidebar -->
                            <div class="sidebar">
                                <!-- Sidebar user panel (optional) -->
                                <br><br><div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                    <div class="image">
                                        <img src="/uploads/avatars/{{$admin->avatar}}" class="img-circle elevation-2" alt="User Image">
                                    </div>
                                    <div class="info">
                                        <a href="/profile" class="d-block" style="color:#ffffff;">{{$admin->name}}</a>
                                    </div>
                                </div>

                                <!-- Sidebar Menu -->
                                <nav class="mt-2">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                        <!-- Add icons to the links using the .nav-icon class
                                             with font-awesome or any other icon font library -->
                                        <li class="nav-item has-treeview menu-open">
                                            <a href="#" class="nav-link active">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>
                                                    Admin Panel
                                                    <i class="right fas fa-angle-left"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="/dashboard" class="nav-link">
                                                        <i class="fas fa-tachometer-alt nav-icon"></i>
                                                        <p style="color:#d9d9ff;">Dashboard</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/users" class="nav-link">
                                                        <i class="fa fa-users nav-icon" aria-hidden="true"></i>
                                                        <p style="color:#d9d9ff;">Users</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/admins" class="nav-link">
                                                        <i class="fas fa-user nav-icon"></i>
                                                        <p style="color:#d9d9ff;">Admins</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="/transactions" class="nav-link">
                                                        <i class="fa fa-file nav-icon" aria-hidden="true"></i>
                                                        <p style="color:#d9d9ff;">Transactions</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview">
                                                    <a href="#" class="nav-link">
                                                        <i class="nav-icon fa fa-gear"></i>
                                                        <p style="color:#d9d9ff;">
                                                            Setting
                                                            <i class="fas fa-angle-left right"></i>
                                                        </p>
                                                    </a>
                                                    <ul class="nav nav-treeview">
                                                        <li class="nav-item">
                                                            <a href="/profile" class="nav-link">
                                                                <i class="fas fa-edit nav-icon"></i>
                                                                <p style="color:#d9d9ff;">Profile setting</p>
                                                            </a>
                                                        </li>
                                                    </ul>
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
                        <div class="content-wrapper" style="background-color:white;padding-top:0px">
                            @yield('content')
                        </div>
                        <!-- Control Sidebar -->
                        <aside class="control-sidebar control-sidebar-dark">
                            <!-- Control sidebar content goes here -->
                        </aside>
                        <!-- /.control-sidebar -->
                        <!-- Main Footer -->
                        <footer class="main-footer">
                            <strong>Copyright &copy; 2014-2021 <a href="https://mostaql.com/dashboard/portfolio">Eng.Sara Elajab</a>.</strong>
                            All rights reserved.
                            <div class="float-right d-none d-sm-inline-block">
                                <b>Version</b> 3.0.0-rc.3
                            </div>
                        </footer>
                @endguest
            </div>
        </div>
    </body>
</html>


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>

<script src="{{asset('assets/puymodals.js')}}"></script>

<script>
    jQuery(document).ready(function () {

        $('[data-url]').click(function (e) {
            $this = $(e.currentTarget).data();
            e.preventDefault();
            if ($this.hasOwnProperty('url'))
                puyModal({loadPage: $this.url});

        });
    });

</script>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
