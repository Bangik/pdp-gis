@extends('layouts.app')

@section('css-admin')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.1.4/css/rowGroup.dataTables.min.css">
@endsection

@section('content-admin')
<section class="section">
    <div class="section-header">
        <h1>Block Management</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>List Blok</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Blok</th>
                                    <th>Nama Afdeling</th>
                                    <th>Nama Kebun</th>
                                    <th>Deskripsi</th>
                                    <th>Lat</th>
                                    <th>Long</th>
                                    <th>Elevasi</th>
                                    <th>Luas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataBlocks as $dataBlock)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$dataBlock->name}}</td>
                                        <td>{{$dataBlock->section->name}}</td>
                                        <td>{{$dataBlock->section->farm->name}}</td>
                                        <td>{{Str::limit($dataBlock->description, 20)}}</td>
                                        <td>{{$dataBlock->latitude}}</td>
                                        <td>{{$dataBlock->longitude}}</td>
                                        <td>{{$dataBlock->elevation}}</td>
                                        <td>{{$dataBlock->area}}</td>
                                        <td>
                                            <a href="{{route('block.edit', ['id' => $dataBlock->id])}}" class="btn btn-warning">Ubah</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus-{{$loop->iteration}}">Hapus</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tampilan Blok Pada Peta</h4>
                </div>
                <div class="card-body">
                    <div id="map" style="width: 100%; height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@foreach ($dataBlocks as $dataBlock)
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-hapus-{{$loop->iteration}}" aria-labelledby="modal-ubah" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin untuk menghapus blok {{$dataBlock->name}}</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <a href="{{route('block.delete', ['id' => $dataBlock->id])}}" class="btn btn-danger">Ya</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
            </div>
        </div>
    </div>
@endforeach

@endsection

@section('js-admin')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.1.4/js/dataTables.rowGroup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "rowGroup" : {
                    "dataSrc": 2
                }
            });
        });
    </script>
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
        
        var map = L.map('map', {
            center: [-8.094745502497549, 113.49720041808277],
            zoom: 12,
            layers: [peta1]
        });
    
        var baseMaps = {
            "Grayscale": peta1,
            "Satellite": peta2,
            "Streets": peta3,
            "dark": peta4,
        };
        L.control.layers(baseMaps).addTo(map);
        @foreach ($dataFarms as $dataFarm)
            L.geoJSON(<?= $dataFarm->geojson_data ?>,{
                style: {
                    color: 'white',
                    fillColor: '{{$dataFarm->color}}',
                    fillOpacity: 0.5,
                }
            }).addTo(map).bindPopup("{{$dataFarm->name}}");

        @endforeach

        @foreach ($dataSections as $dataSection)
            @if ($dataSection->geojson_data != null && $dataSection->geojson_data != '')
                L.geoJSON(<?= $dataSection->geojson_data ?>,{
                    style: {
                        color: 'white',
                        fillColor: '{{$dataSection->color}}',
                        fillOpacity: 0.5,
                    }
                }).addTo(map).bindPopup("{{$dataSection->name}}");
            @endif
        @endforeach

        let popupContent = "";
        @foreach ($dataBlocks as $dataBlock)
            @if ($dataBlock->latitude != null && $dataBlock->latitude != '' && $dataBlock->longitude != null && $dataBlock->longitude != '')
            popupContent = `
            <b>{{$dataBlock->name}}</b><br>
            {{$dataBlock->section->name}} <br>
            Luas {{$dataBlock->area}} Ha<br>
            Ketinggian {{$dataBlock->elevation}} MDPL <br>
            Deskripsi {{Str::limit($dataBlock->description, 10)}}`;

            L.marker([<?= $dataBlock->latitude ?>, <?= $dataBlock->longitude ?>]).addTo(map)
            .bindPopup(popupContent)
            .openPopup();
            @endif
        @endforeach
    </script>
@endsection