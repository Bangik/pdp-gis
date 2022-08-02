<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta class="PDP Jember" name="description">
    <meta class="PDP Jember" name="keywords">
    <meta class="PDP Jember" name="author">
    <title>PDP Jember</title>

    <!-- Fav icon -->
    <link href="{{ asset('front/images/logo/favicon.png') }}"" rel=" shortcut icon">

    <!-- Font Family-->
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet">

    <!--bootstrap css-->
    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet" type="text/css">

    <!-- color css -->
    <link href="{{ asset('front/css/color-3.css') }}" rel="stylesheet" type="text/css">

    <!--owl carousel css-->
    <link href="{{ asset('front/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('front/css/fontawesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/css/themify.css') }}" rel="stylesheet" type="text/css">

    <!-- flat Icons -->
    <link href="{{ asset('front/css/flaticon.css') }}" rel="stylesheet" type="text/css">

    <!--magnific popup css-->
    <link href="{{ asset('front/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet">

    <!-- Leaflet css -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
</head>

<body class="event" data-offset="50" data-spy="scroll" data-target=".navbar">
    <!--loader start-->
    <div class="loader-wrapper">
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--loader end-->

    <!-- Nav Start-->
    <header class="event loding-header nav-abs custom-scroll nav-lg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <a class="d-flex align-items-center m-r-auto" href="{{route('landing')}}"><img alt=""
                                style="width: 70px; height:70px" class="img-fluid"
                                src="{{asset('front/images/logo/1.png')}}">
                            <h2 class="text-white font-weight-normal">PDP Jember</h2>
                        </a>
                        <div class="responsive-btn">
                            <a class="toggle-nav" href="#">
                                <i class="fa fa-bars text-white"></i>
                            </a>
                        </div>
                        <div class="navbar m-l-auto" id="togglebtn">
                            <div class="responsive-btn">
                                <a class="btn-back" href="#">
                                    <h5>back</h5>
                                </a>
                            </div>
                            <ul class="main-menu">
                                <li><a href="{{route('landing')}}">Beranda</a>
                                </li>
                                <li><a class="dropdown" href="{{route('about.me')}}">Tentang Kami</a>
                                    <ul>
                                        <li><a href="{{route('about.history')}}">Sejarah Perusahaan</a></li>
                                        <li><a href="{{route('about.profile')}}">Profil Perusahaan</a></li>
                                        <li><a href="{{route('about.visionMission')}}">Visi dan Misi</a></li>
                                        <li><a href="{{route('about.organizationStructure')}}">Struktur Organisasi</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown" href="#">Informasi</a>
                                    <ul>
                                        <li><a href="{{route('information.news')}}">Berita</a></li>
                                        <li><a href="{{route('information.anounc')}}">Pengumuman</a></li>
                                        <li><a href="#">Something else</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown" href="#">Unit Bisnis</a>
                                    <ul>
                                        <li><a href="{{route('bussiness.tebu')}}">Tebu</a></li>
                                        <li><a href="{{route('bussiness.kopi')}}">Kopi</a></li>
                                        <li><a href="{{route('bussiness.karet')}}">Karet</a></li>
                                        <li><a href="{{route('bussiness.cengkeh')}}">Cengkeh</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown" href="#">Laporan</a>
                                    <ul>
                                        <li><a href="{{route('report.yearly')}}">Laporan Tahunan</a></li>
                                        <li><a href="{{route('report.audit')}}">Laporan Audit</a></li>
                                        <li><a href="{{route('report.keuangan')}}">Laporan Keuangan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Nav end-->

    @yield('content')

    <!--contact section start-->
    <footer class="event contact set-relative bg bg-img bg-about p-b-0" id="contact">
        <div class="container p-b-150">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="title title3">
                        <div class="main-title">
                            <h2 class=" text-white">Contact Us</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6 p-r-0 map">
                    <div class="iframe-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63188.13033977106!2d113.66835714537842!3d-8.176728543344032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd694039f257609%3A0xf79a03b5dca1bed6!2sPerusahaan%20Daerah%20Perkebunan!5e0!3m2!1sen!2sid!4v1654831630669!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63188.13033977106!2d113.66835714537842!3d-8.176728543344032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd694039f257609%3A0xf79a03b5dca1bed6!2sPerusahaan%20Daerah%20Perkebunan!5e0!3m2!1sen!2sid!4v1654831630669!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63188.13033977106!2d113.66835714537842!3d-8.176728543344032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd694039f257609%3A0xf79a03b5dca1bed6!2sPerusahaan%20Daerah%20Perkebunan!5e0!3m2!1sen!2sid!4v1654831630669!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-xl-5 p-l-0 col-md-6 set-z-index form-footer">
                    <div class="bg-white">

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input class="form-control" id="name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Phone">Phone *</label>
                                        <input class="form-control" id="Phone" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Email">Email *</label>
                                        <input class="form-control" id="Email" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Subject">Subject *</label>
                                        <input class="form-control" id="Subject" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Message">Message *</label>
                                <input class="form-control" id="Message" type="text">
                            </div>

                            <a class="btn btn-default primary-btn m-0-auto">send</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img alt="" class="set-abs top-0 plane2" src="../front/images/event/footer/2.png">
        <img alt="" class="set-abs bottom-0 plane" src="../front/images/event/footer/1.png">
    </footer>
    <!--contact section end-->
    
    <!--copyright section start-->
    <div class="event copyright flex">
        <div class="container-fluid">
            <div class="row">
                <dclass class="col-md-6">
                    <div class="link-horizontal d-flex align-content-lg-center h-100">
                        <ul>
                            <li>
                                <a class="center-content" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a class="center-content" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="center-content" href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a class="center-content" href="#">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </dclass>
                <div class="col-md-6">
                    <p class="copyright-text text-right text-white">© 2019 PDP Jember. All Rights Reserved </p>
                </div>
            </div>
        </div>
    </div>
    <!--copyright section end-->

    <!-- Tap on Top-->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- Tap on Ends-->

    <!-- latest jquery-->
    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>

    <!-- popper js-->
    <script src="{{ asset('front/js/popper.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('front/js/bootstrap.js') }}"></script>
    <!--  costamizer option -->
    <script src="{{ asset('front/js/custamizer-option.js') }}"></script>

    <!--magnific popup js-->
    <script src="{{ asset('front/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('front/js/isotope.min.js') }}"></script>
    <script src="{{ asset('front/js/portfolio.js') }}"></script>

    <!--typed js--

    <!--owl js-->
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>

    <!--AOS js-->
    <script src="{{ asset('front/js/aos.js') }}"></script>

    <!--tilt js-->
    <script src="{{ asset('front/js/vanilla-tilt.min.js') }}"></script>

    <!-- script js-->
    <script src="{{ asset('front/js/main.js') }}"></script>
    <script src="{{ asset('front/js/zoom-gallery.js') }}"></script>
    <script src="{{ asset('front/js/script3.js') }}"></script>
    <script src="{{ asset('front/js/layout-fix.js') }}"></script>

    <!-- leaflet js-->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- custom js-->
    @yield('scripts')
</body>

</html>
