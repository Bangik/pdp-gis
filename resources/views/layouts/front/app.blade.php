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

                                        <li><a href="{{route('about.history')}}">Sejarah Perusahaan</a>
                                        </li>

                                        <li><a href="{{route('about.profile')}}">Profil Perusahaan</a>
                                        </li>

                                        <li><a href="{{route('about.visionMission')}}">Visi dan Misi</a>
                                        </li>

                                        <li><a href="{{route('about.organizationStructure')}}">Struktur Organisasi</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown" href="#">pages</a>
                                    <ul>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="faq.html">faqs</a></li>
                                        <li><a href="collection.html">collection</a></li>
                                        <li><a href="typography.html">typography</a></li>
                                        <li><a href="maintenance.html">Maintenance</a></li>
                                        <li><a href="about-us.html">About us</a></li>
                                        <li class="sub-menu"><a href="#">team</a>
                                            <ul>
                                                <li><a class="sub-menu-title" href="team.html">team</a></li>
                                                <li><a href="team-grid.html">team grid</a></li>
                                                <li><a href="team-list.html">team list</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu"><a class="sub-menu-title" href="#">coming soon</a>
                                            <ul>
                                                <li><a href="coming-soon.html">coming soon 1</a></li>
                                                <li><a href="coming-soon2.html">coming soon 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-menu"><a class="dropdown" href="#">elements</a>
                                    <div class="mega-menu-container resize">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="menu-container">
                                                        <ul class="menu-icon">
                                                            <li><a href="alert.html"><i
                                                                        class="icon-alert"></i>alerts</a></li>
                                                            <li><a href="accordion.html"><i
                                                                        class="icon-layout-accordion-merged"></i>accordion</a>
                                                            </li>
                                                            <li><a href="boxshadow.html"><i
                                                                        class="icon-layers"></i>box
                                                                    shadow</a></li>
                                                            <li><a href="button.html"><i
                                                                        class="icon-write"></i>buttons</a></li>
                                                            <li><a href="contact.html"><i
                                                                        class="icon-map-alt"></i>contact</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="menu-container">
                                                        <ul class="menu-icon">
                                                            <li><a href="event-schedule.html"><i
                                                                        class="icon-list"></i>event-schedule</a>
                                                            </li>
                                                            <li><a href="gallery.html"><i
                                                                        class="icon-gallery"></i>gallery</a></li>
                                                            <li><a href="pricing.html"><i
                                                                        class="icon-money"></i>pricing</a></li>
                                                            <li><a href="counter.html"><i
                                                                        class="icon-time"></i>counter</a></li>
                                                            <li><a href="countdown.html"><i
                                                                        class="icon-alarm-clock"></i>countdown</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="menu-container">
                                                        <ul class="menu-icon">
                                                            <li><a href="progress.html"><i
                                                                        class="icon-bar-chart"></i>progress bar</a></li>
                                                            <li><a href="testimonial.html"><i
                                                                        class="icon-thought"></i>testimonial</a></li>
                                                            <li><a href="video.html"><i
                                                                        class="icon-video-camera"></i>video</a></li>
                                                            <li><a href="services.html"><i
                                                                        class="icon-headphone"></i>service</a></li>
                                                            <li><a href="subscribe.html"><i
                                                                        class="icon-share-alt"></i>subscribe</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mega-menu"><a class="dropdown" href="#">portfolio</a>
                                    <div class="mega-menu-container">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="menu-container">
                                                        <a class="menu-head" data-target=".demo2"
                                                            data-toggle="collapse" href="#">portfolio</a>
                                                        <ul>
                                                            <li><a href="portfolio-basic-2-col.html">2 column </a></li>
                                                            <li><a href="portfolio-basic-3-col.html">3 column </a></li>
                                                            <li><a href="portfolio-basic-4-col.html">4 column </a></li>
                                                            <li><a href="portfolio-title-3-col.html">3 column with
                                                                    title</a></li>
                                                            <li><a href="portfolio-title-4-col.html">4 column with
                                                                    title</a></li>
                                                            <li><a href="portfolio-parallex.html">With parallex
                                                                    effect</a></li>
                                                            <li><a href="portfolio-centered-slides.html">centered
                                                                    slides</a></li>
                                                            <li><a href="portfolio-full-screen-vertical.html">vertical
                                                                    slider with portfolio</a></li>
                                                            <li><a href="portfolio-multiple-carousel.html">4 slide with
                                                                    center slider</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="menu-container">
                                                        <a class="menu-head" data-target=".demo2"
                                                            data-toggle="collapse" href="#">portfolio details</a>
                                                        <ul>
                                                            <li><a href="portfolio-detail4.html">Container layout</a>
                                                            </li>
                                                            <li><a href="portfolio-detail3.html">Full width</a>
                                                            </li>
                                                            <li><a href="portfolio-detail2.html">With Big breadcrumb</a>
                                                            </li>
                                                            <li><a href="portfolio-detail.html">Details with slider</a>
                                                            </li>
                                                            <li><a href="portfolio-detail6.html">Video Portfolio</a>
                                                            </li>
                                                            <li><a href="portfolio-detail5.html">Two images layout</a>
                                                            </li>
                                                            <li><a href="portfolio-detail7.html">left side images</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="menu-container">
                                                        <a class="menu-head" data-target=".demo2"
                                                            data-toggle="collapse" href="#">Trending Layouts</a>
                                                        <ul>
                                                            <li><a href="portfolio-creative-1.html">Trending Layout
                                                                    1</a>
                                                            </li>
                                                            <li><a href="portfolio-creative-2.html">Trending Layout
                                                                    2</a>
                                                            </li>
                                                            <li><a href="portfolio-creative-3.html">Trending Layout
                                                                    3</a>
                                                            </li>
                                                            <li><a href="portfolio-creative-4.html">Trending Layout
                                                                    4</a>
                                                            </li>
                                                            <li><a href="portfolio-modern-4-col.html">Trending Layout
                                                                    5</a>
                                                            </li>
                                                            <li><a href="portfolio-modern-3-col.html">Trending Layout
                                                                    6</a>
                                                            </li>
                                                            <li><a href="portfolio-modern-2-col.html">Trending Layout
                                                                    7</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="menu-container">
                                                        <a class="menu-head" data-target=".demo2"
                                                            data-toggle="collapse" href="#">Masonry Style</a>
                                                        <ul>
                                                            <li><a href="portfolio-2-col.html">2 Column</a></li>
                                                            <li><a href="portfolio-3-col.html">3 Column</a></li>
                                                            <li><a href="portfolio-4-col.html">4 Column</a></li>
                                                            <li><a href="portfolio1.html">Creative Layout 1</a></li>
                                                            <li><a href="portfolio2.html">Creative layout 2</a></li>
                                                            <li><a href="portfolio3.html">Creative Layout 3</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mega-menu"><a class="dropdown" href="#">shop</a>
                                    <div class="mega-menu-container">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col">
                                                    <div class="menu-container">
                                                        <a class="menu-head" data-target=".demo2"
                                                            data-toggle="collapse" href="#">shop categories</a>
                                                        <ul>
                                                            <li><a href="category-page-leftsidebar(4-grid).html">left
                                                                    sidebar</a></li>
                                                            <li><a href="category-page-leftsidebar(2-grid).html">two
                                                                    grid</a></li>
                                                            <li><a href="category-page-leftsidebar(3-grid).html">three
                                                                    grid</a></li>
                                                            <li><a href="category-page-leftsidebar(6-grid).html">six
                                                                    grid</a></li>
                                                            <li><a href="category-page-rightsidebar(4-grid).html">right
                                                                    sidebar <i
                                                                        class="fa fa-magic color-animated"></i></a></li>
                                                            <li><a href="category-page-rightsidebar(2-grid).html">right
                                                                    2
                                                                    grid</a></li>
                                                            <li><a href="category-page-rightsidebar(3-grid).html">right
                                                                    3
                                                                    grid</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col menu-container">
                                                    <a class="menu-head" data-target=".demo2"
                                                        data-toggle="collapse" href="#">shop categories</a>
                                                    <ul>
                                                        <li><a href="category-page-rightsidebar(6-grid).html">right 6
                                                                grid</a></li>
                                                        <li><a href="category-page-nosidebar(4-grid).html">no
                                                                sidebar</a>
                                                        </li>
                                                        <li><a href="category-page-nosidebar(2-grid).html">no sidebar 2
                                                                grid</a></li>
                                                        <li><a href="category-page-nosidebar(3-grid).html">no sidebar 3
                                                                grid</a></li>
                                                        <li><a href="category-page-nosidebar(6-grid).html">no sidebar 6
                                                                grid</a></li>
                                                        <li><a href="category-page(metro).html">category metro</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col menu-container">
                                                    <a class="menu-head" data-target=".demo2"
                                                        data-toggle="collapse" href="#">product pages</a>
                                                    <ul>
                                                        <li><a href="product-page(no-sidebar).html">no sidebar</a></li>
                                                        <li><a href="product-page(left-sidebar).html">left sidebar</a>
                                                        </li>
                                                        <li><a href="product-page(right-sidebar).html">right sidebar</a>
                                                        </li>
                                                        <li><a href="product-page(3-column).html">3 grid<i
                                                                    class="fa fa-thumbs-o-up color-animated"></i></a>
                                                        </li>
                                                        <li><a href="product-page(3-col-left).html">3 grid-left </a>
                                                        </li>
                                                        <li><a href="product-page(3-col-right).html">3 grid-right</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col menu-container">
                                                    <a class="menu-head" data-target=".demo2"
                                                        data-toggle="collapse" href="#">product pages</a>
                                                    <ul>
                                                        <li><a href="product-page(accordian).html">accordian</a></li>
                                                        <li><a href="product-page(bundle).html">bundle<i
                                                                    class="fa fa-chain-broken color-animated"></i></a>
                                                        </li>
                                                        <li><a href="product-page(image-swatch).html">image swatch</a>
                                                        </li>
                                                        <li><a href="product-page(image-outside).html">image outside</a>
                                                        </li>
                                                        <li><a href="product-page(sticky).html">image sticky</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col ">
                                                    <div class="menu-container">
                                                        <a class="menu-head" data-target=".demo2"
                                                            data-toggle="collapse" href="#">shop pages</a>
                                                        <ul>
                                                            <li><a href="cart.html">cart <i
                                                                        class="fa fa-cart-plus color-animated"></i></a>
                                                            </li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="compare.html">compare</a></li>
                                                            <li><a href="compare-2.html">compare 2</a></li>
                                                            <li><a href="signup.html">sign up</a></li>
                                                            <li><a href="login.html">login</a></li>
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="mega-menu"><a class="dropdown" href="#">features</a>
                                    <div class="mega-menu-container">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="menu-container">
                                                        <a class="menu-head" data-target=".demo2"
                                                            data-toggle="collapse" href="#">header options</a>
                                                        <ul>
                                                            <li><a href="header-light.html">light header</a></li>
                                                            <li><a href="header-dark.html">dark header</a></li>
                                                            <li><a href="header-transparent.html">Glass header</a></li>
                                                            <li><a href="header-center-logo.html">Logo Center</a></li>
                                                            <li><a href="header-right-navigation.html">header right
                                                                    navigation</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="menu-container">
                                                        <a class="menu-head" data-target=".demo2"
                                                            data-toggle="collapse" href="#">breadcrumb option</a>
                                                        <ul>
                                                            <li><a href="breadcrumb.html">Classic Types</a></li>
                                                            <li><a href="breadcrumb-left.html">breadcrumb left</a></li>
                                                            <li><a href="breadcrumb-right.html">breadcrumb right</a>
                                                            </li>
                                                            <li><a href="breadcrumb-center.html">breadcrumb center</a>
                                                            </li>
                                                            <li><a href="breadcrumb-dark.html">breadcrumb dark</a></li>
                                                            <li><a href="breadcrumb-parallex-background.html">parallex
                                                                    background</a></li>
                                                            <li><a href="breadcrumb-background.html">with background</a>
                                                            </li>
                                                            <li><a href="breadcrumb-gallery-background.html">gallery
                                                                    background</a></li>
                                                            <li><a href="breadcrumb-video-background.html">video
                                                                    background</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="menu-container">
                                                        <a class="menu-head" data-target=".demo2"
                                                            data-toggle="collapse" href="#">footer options</a>
                                                        <ul>
                                                            <li><a href="footer-default.html">footer default</a></li>
                                                            <li><a href="footer3-light.html">footer light</a></li>
                                                            <li><a href="footer3-dark.html">footer dark</a></li>
                                                            <li><a href="footer1-light.html">footer dark light</a></li>
                                                            <li><a href="footer1-dark.html">footer dark gradient </a>
                                                            </li>
                                                            <li><a href="footer2-light.html">footer creative</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="menu-container">
                                                        <a class="menu-head" data-target=".demo2"
                                                            data-toggle="collapse" href="#">gallery types</a>
                                                        <ul>
                                                            <li><a href="zoom-gallery.html">zoom gallery</a></li>
                                                            <li><a href="popup-with-form.html">form in popup</a></li>
                                                            <li><a href="popup-with-modal.html">modal in popup</a></li>
                                                            <li><a href="popup-with-youtube.html">youtube in popup</a>
                                                            </li>
                                                            <li><a href="popup-with-googlemap.html">Map in popup</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

</body>

</html>