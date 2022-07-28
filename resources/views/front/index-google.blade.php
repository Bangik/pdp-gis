@extends('layouts.front2')

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
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcuXS0hZa0Sui5Q1cRSfp8NZOJc3QlfxU&callback=initMap&v=weekly" async></script>
<script>
    let map;

    function initMap() {
        var myLatLng = new google.maps.LatLng(-8.125569, 113.465262),
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: myLatLng,
            mapTypeId: "hybrid",
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                mapTypeIds: ["roadmap", "terrain"],
            },
        });
        // var marker = new google.maps.Marker({
        //     position: myLatLng,
        //     map,
        //     draggable:true,
        //     title: "drag",
        // });

        // google.maps.event.addListener(marker, 'dragend', function (evt) {
        //     console.log("marker dropped at " + evt.latLng.lat().toFixed(3) + " and " + evt.latLng.lng().toFixed(3));           
        //     // map.panTo(evt.latLng);
        // });

        @foreach($dataFarms as $dataFarm)
            map.data.addGeoJson({!!$dataFarm->geojson_data!!});
            map.data.setStyle({
                fillColor: "{{$dataFarm->color}}",
                strokeWeight: 1,
                fillOpacity: 0.5,
            });
        @endforeach
        
        // Create a <script> tag and set the USGS URL as the source.
        const script = document.createElement("script");

        // This example uses a local copy of the GeoJSON stored at
        // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
        script.src =
            "https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js";
        document.getElementsByTagName("head")[0].appendChild(script);
    }

</script>
@endsection