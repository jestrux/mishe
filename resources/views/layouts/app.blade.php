<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <title>Mishe</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/libs/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{asset('css/template.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('css/theme.css')}}" rel="stylesheet"> --}}

    <link href="{{asset('css/common.css')}}" rel="stylesheet">

    @yield('styles')
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    
    <div id="main-wrapper">
        <header id="mainNavBar" class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <b><i class="wi wi-sunset"></i></b>&nbsp;
                        <span class="font-bold">Mishe</span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('images/users/1.jpg')}}" alt="user" class="profile-pic m-r-10" />
                                @if(isset($name))
                                    {{$name}}
                                @else
                                    Markan Doe
                                @endif        
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>        
        <aside id="mainSideBar" class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> 
                            <a class="waves-effect waves-dark" href="index.html" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">

            <div class="container-fluid">
                @yield('content')
            </div>

            <footer class="footer"> © {{date('Y')}} Mishe </footer>
        </div>
    </div>
    
    <script src="{{asset('js/libs/jquery.min.js')}}"></script>
    <script src="{{asset('js/libs/tether.min.js')}}"></script>
    <script src="{{asset('js/libs/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/libs/sticky-kit.min.js')}}"></script>
    <script src="{{asset('js/libs/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('js/libs/waves.js')}}"></script>
    
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <script src="{{asset('js/template.min.js')}}"></script>
    
    @yield('scripts')
</body>

</html>
