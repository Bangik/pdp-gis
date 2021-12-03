<!DOCTYPE html>
<html lang="en-US" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--    Document Title-->
        <title>Web GIS PTPN 12</title>

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
                        <div>PTPN 12</div>
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Home</a></li>
                        </ul>                     
                    </div>
                </div>
            </nav>
            <section id="home">
                <div class="bg-holder" style="background-image:url({{asset('img/illustrations/hero-bg.png')}});background-position:bottom;background-size:cover;"></div>
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="map" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>

    <script>
        var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11'
            });
    
        var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/satellite-v9'
            });
    
    
        var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            });
    
        var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/dark-v10'
            });

        @foreach ($dataFarms as $dataFarm)
            var dataKebun{{$dataFarm->id}} = L.layerGroup();
        @endforeach
        
        var map = L.map('map', {
            center: [-8.094745502497549, 113.49720041808277],
            zoom: 12,
            layers: [peta1,
                @foreach ($dataFarms as $dataFarm)
                    dataKebun{{$dataFarm->id}},
                @endforeach
            ]
        });
    
        var baseMaps = {
            "Grayscale": peta1,
            "Satellite": peta2,
            "Streets": peta3,
            "dark": peta4,
        };

        var overlayer = {
            @foreach ($dataFarms as $dataFarm)
                "{{$dataFarm->name}}": dataKebun{{$dataFarm->id}},
            @endforeach
        };

        L.control.layers(baseMaps, overlayer).addTo(map); 

        @foreach ($dataFarms as $dataFarm)
            L.geoJSON(<?= $dataFarm->geojson_data ?>,{
                style: {
                    color: 'white',
                    fillColor: '{{$dataFarm->color}}',
                    fillOpacity: 0.5,
                }
            }).addTo(dataKebun{{$dataFarm->id}}).bindPopup("{{$dataFarm->name}}");

        @endforeach

        @foreach ($dataCommodities as $dataCommodity)
            L.geoJSON(<?= $dataCommodity->geojson_data ?>,{
                style: {
                    color: 'white',
                    fillColor: '{{$dataCommodity->color}}',
                    fillOpacity: 0.5,
                }
            }).addTo(map).bindPopup("{{$dataCommodity->name}}");

        @endforeach
    </script>
</html>