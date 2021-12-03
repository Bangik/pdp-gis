@extends('layouts.app')

@section('css-admin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.4.0/css/bootstrap-colorpicker.min.css" integrity="sha512-m/uSzCYYP5f55d4nUi9mnY9m49I8T+GUEe4OQd3fYTpFU9CIaPazUG/f8yUkY0EWlXBJnpsA7IToT2ljMgB87Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.colorpicker.colorpicker-2x {
    width: 272px;
}

.colorpicker-2x .colorpicker-saturation {
    width: 200px;
    height: 200px;
}

.colorpicker-2x .colorpicker-hue,
.colorpicker-2x .colorpicker-alpha {
    width: 30px;
    height: 200px;
}

.colorpicker-2x .colorpicker-alpha,
.colorpicker-2x .colorpicker-preview {
    background-size: 20px 20px;
    background-position: 0 0, 10px 10px;
}

.colorpicker-2x .colorpicker-preview,
.colorpicker-2x .colorpicker-preview div {
    height: 30px;
    font-size: 16px;
    line-height: 160%;
}

.colorpicker-saturation .colorpicker-guide {
    height: 10px;
    width: 10px;
    border-radius: 10px;
    margin: -5px 0 0 -5px;
}
</style>

<!-- leaflet draw -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>

@endsection

@section('content-admin')
<section class="section">
    <div class="section-header">
        <h1>Farm Management</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Gambar Komoditi pada peta kebun</h4>
                </div>
                <div class="card-body">
                    <div id="map" style="width: 100%; height: 400px;"></div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" id="get-geojson">Dapatkan Data GeoJSON</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Komoditi</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('commodity.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name_farm">Nama Kebun</label> <small class="text-danger">*</small>
                            <select name="farm_id" id="name_farm" class="form-control">
                                @foreach ($dataFarms as $dataFarm)
                                    <option value="{{$dataFarm->id}}">{{$dataFarm->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Komoditi</label> <small class="text-danger">*</small>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="area">Luas</label> <small class="text-danger">*</small>
                            <input type="number" name="area" id="area" class="form-control @error('area') is-invalid @enderror">
                            @error('area')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="geojson-data">GeoJSON Data</label> <small class="text-danger">*</small>
                            <textarea name="geojson_data" id="geojson-data" class="form-control @error('geojson_data') is-invalid @enderror" rows="3"></textarea>
                            @error('geojson_data')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div id="cp">
                                <label for="color">Warna</label> <small class="text-danger">*</small>
                                <input type="text" name="color" id="color" class="form-control @error('color') is-invalid @enderror">
                                @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                       
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js-admin')
<!-- Color picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.4.0/js/bootstrap-colorpicker.min.js" integrity="sha512-94dgCw8xWrVcgkmOc2fwKjO4dqy/X3q7IjFru6MHJKeaAzCvhkVtOS6S+co+RbcZvvPBngLzuVMApmxkuWZGwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(function () {
    $('#cp')
        .colorpicker({
        inline: true,
        container: true,
        customClass: 'colorpicker-2x',
        sliders: {
            saturation: {
                maxLeft: 200,
                maxTop: 200
            },
            hue: {
                maxTop: 200
            },
            alpha: {
                maxTop: 200
            }
        },
        extensions: [
            {
            name: 'swatches',
            options: {
                colors: {
                'tetrad1': '#000',
                'tetrad2': '#000',
                'tetrad3': '#000',
                'tetrad4': '#000'
                },
                namesAsValues: false
            }
            }
        ]
        })
        .on('colorpickerChange colorpickerCreate', function (e) {
        var colors = e.color.generate('tetrad');

        colors.forEach(function (color, i) {
            var colorStr = color.string(),
                swatch = e.colorpicker.picker
                    .find('.colorpicker-swatch[data-name="tetrad' + (i + 1) + '"]');

            swatch
                .attr('data-value', colorStr)
                .attr('title', colorStr)
                .find('> i')
                .css('background-color', colorStr);
        });
        });
});
</script>

<!-- leaflet draw -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>
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

    var map = L.map('map',{
        center: [-8.094745502497549, 113.49720041808277],
        zoom: 12,
        layers: [peta3,
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

    // FeatureGroup is to store editable layers
    var drawnItems = new L.FeatureGroup();
    map.addLayer(drawnItems);
    var drawControl = new L.Control.Draw({
        edit: {
            featureGroup: drawnItems
        }
    });
    map.addControl(drawControl);

    map.on('draw:created', function (e) {
        var layer = e.layer,
        feature = layer.feature = layer.feature || {};

        feature.type = feature.layerType || 'Feature';
        var props = feature.properties = feature.properties || {};
        drawnItems.addLayer(layer);
    });

    $(document).ready(function(){
        $('#get-geojson').click(function(){
            var geojson = drawnItems.toGeoJSON();
            $('#geojson-data').val(JSON.stringify(geojson));
        });
    });
</script>
@endsection