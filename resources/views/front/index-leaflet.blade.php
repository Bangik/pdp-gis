@extends('layouts.front')

@section('front-content')
<div class="bg-holder" style="background-image:url({{asset('img/illustrations/hero-bg.png')}});background-position:bottom;background-size:cover;"></div>
<div class="container position-relative">
    <div class="row">
        <div class="col-md-12">
            <div id="map" style="width: 100%; height: 500px;"></div>
        </div>
    </div>
</div>
@endsection

@section('front-js')
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
@endsection