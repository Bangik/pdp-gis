<!DOCTYPE html>
<html lang="en-US" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--    Document Title-->
        <title>Web GIS PDP Jember</title>

        <!--    Favicons-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/Untitled-1.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/Untitled-1.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/Untitled-1.png')}}">
        <meta name="msapplication-TileImage" content="{{asset('img/favicon/Untitled-1.png')}}">
        <meta name="theme-color" content="#F1F1F6">

        <!--    Stylesheets-->
        <link href="{{asset('css/theme.min.css')}}" rel="stylesheet" />

        <!--    JS-->
        <script src="{{asset('js/popperjs/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/theme.js')}}"></script>

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
        
        <!-- leaflet -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    </head>

    <body>
        <main class="main" id="top">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3">
                <div class="container">
                    <a href="/" class="navbar-brand d-flex align-items-center fw-bold fs-2">
                        <div>PDP Jember</div>
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                            <li class="nav-item"><a class="nav-link fw-medium active" href="{{route('landing')}}">Map Leaflet</a></li>
                            <li class="nav-item"><a class="nav-link fw-medium" href="{{route('view.google')}}">Map Google</a></li>
                        </ul>                     
                    </div>
                </div>
            </nav>
            <section id="home">
                @yield('front-content')
            </section>
        </main>
    </body>
    @yield('front-js')
</html>