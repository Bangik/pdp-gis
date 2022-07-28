<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="{{ asset('front/images/logo/favicon.png') }}" rel=" shortcut icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin - PDP Jember</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/components.css')}}">

    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    
    <!-- toastr -->
    @toastr_css

    @yield('css-admin')

</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{asset('img/illustrations/avatar-5.png')}}" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">{{Auth::user()->name}}</div></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/">Admin PDP Jember</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="/">PDP</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Menu</li>
                        <li class="nav-item dropdown {{Str::contains(Request::fullUrl(), 'dashboard') ? 'active' : ''}}">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{Str::contains(Request::fullUrl(), 'dashboard') ? 'active' : ''}}"><a class="nav-link" href="{{route('dashboard')}}">Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown {{Str::contains(Request::fullUrl(), 'user') ? 'active' : ''}}">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User Management</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{Str::contains(Request::fullUrl(), 'user/index') ? 'active' : ''}}"><a class="nav-link" href="{{route('user.index')}}">List Users</a></li>
                                <li class="{{Str::contains(Request::fullUrl(), 'user/create') ? 'active' : ''}}"><a class="nav-link" href="{{route('user.create')}}">Tambah User</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown {{Str::contains(Request::fullUrl(), 'farm') ? 'active' : ''}}">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Farm Management</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{Str::contains(Request::fullUrl(), 'farm/index') ? 'active' : ''}}"><a class="nav-link" href="{{route('farm.index')}}">List Kebun</a></li>
                                <li class="{{Str::contains(Request::fullUrl(), 'farm/create') ? 'active' : ''}}"><a class="nav-link" href="{{route('farm.create')}}">Tambah Kebun</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown {{Str::contains(Request::fullUrl(), 'section') ? 'active' : ''}}">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-map-marker-alt"></i> <span>Afdeling Management</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{Str::contains(Request::fullUrl(), 'section/index') ? 'active' : ''}}"><a class="nav-link" href="{{route('section.index')}}">List Afdeling</a></li>
                                <li class="{{Str::contains(Request::fullUrl(), 'section/create') ? 'active' : ''}}"><a class="nav-link" href="{{route('section.create')}}">Tambah Afdeling</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown {{Str::contains(Request::fullUrl(), 'block') ? 'active' : ''}}">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-map-marker-alt"></i> <span>Block Management</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{Str::contains(Request::fullUrl(), 'block/index') ? 'active' : ''}}"><a class="nav-link" href="{{route('block.index')}}">List Blok</a></li>
                                <li class="{{Str::contains(Request::fullUrl(), 'block/create') ? 'active' : ''}}"><a class="nav-link" href="{{route('block.create')}}">Tambah Blok</a></li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content-admin')         
    </div>
</body>
<!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{asset('js/stisla/stisla.js')}}"></script>

    <!-- JS Libraies -->
    @toastr_js
    @toastr_render

    <!-- Template JS File -->
    <script src="{{asset('js/stisla/scripts.js')}}"></script>
    <script src="{{asset('js/stisla/custom.js')}}"></script>

    <!-- Page Specific JS File -->
    @yield('js-admin')
</html>
