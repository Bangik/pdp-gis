@extends('layouts.app')

@section('content-admin')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Peta Kerja PTPN 12</h4>
                </div>
                <div class="card-body">
                    <div id="map" style="width: 100%; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js-admin')
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
        var marker = new google.maps.Marker({
            position: myLatLng,
            map,
            draggable:true,
            title: "drag",
        });

        google.maps.event.addListener(marker, 'dragend', function (evt) {
            console.log("marker dropped at " + evt.latLng.lat().toFixed(3) + " and " + evt.latLng.lng().toFixed(3));           
            // map.panTo(evt.latLng);
        });

        const geojsondata = "http://webgispolije.id/json/sementara coba.geojson";
        map.data.loadGeoJson(geojsondata);
        map.data.setStyle({
            fillColor: "green",
            strokeWeight: 1,
        });
        // map.data.addGeoJson(geojsondata);

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