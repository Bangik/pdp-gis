@extends('layouts.app')
@section('content-admin')
<section class="section">
    <div class="section-header">
        <h1>Block Management</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Blok</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('block.update', ['id' => $dataBlock->id])}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="farm_id">Nama Kebun</label> <small class="text-danger">*</small>
                            <select name="farm_id" id="farm_id" class="form-control">
                                @foreach ($dataFarms as $dataFarm)
                                    <option value="{{$dataFarm->id}}" {{$dataFarm->id == $dataBlock->section->farm->id ? 'selected' : ''}}>{{$dataFarm->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="section_id">Nama Afdeling</label> <small class="text-danger">*</small>
                            <select name="section_id" id="section_id" class="form-control">
                                @foreach ($dataSections as $dataSection)
                                    @if($dataSection->farm->id == $dataBlock->section->farm->id)
                                        <option value="{{$dataSection->id}}" {{$dataSection->id == $dataBlock->section->id ? 'selected' : ''}}>{{$dataSection->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Blok</label> <small class="text-danger">*</small>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{$dataBlock->name}}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label> <small class="text-danger">*</small>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="50">{{$dataBlock->description}}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="latitude">Koordinat Latitude (S) </label> <small class="text-danger">*</small>
                            <input type="text" name="latitude" id="latitude" class="form-control @error('latitude') is-invalid @enderror" value="{{$dataBlock->latitude}}">
                            @error('latitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="longitude">Koordinat Longitude (E) </label> <small class="text-danger">*</small>
                            <input type="text" name="longitude" id="longitude" class="form-control @error('longitude') is-invalid @enderror" value="{{$dataBlock->longitude}}">
                            @error('longitude')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="area">Luas</label> <small class="text-danger">*</small>
                            <input type="text" name="area" id="area" class="form-control @error('area') is-invalid @enderror" value="{{$dataBlock->area}}">
                            @error('area')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="elevation">Elevasi / Ketinggian</label> <small class="text-danger">*</small>
                            <input type="number" name="elevation" id="elevation" class="form-control @error('elevation') is-invalid @enderror" value="{{$dataBlock->elevation}}">
                            @error('elevation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js-admin')
<script>
    $(document).ready(function(){
        $('#farm_id').change(function(){
            var id = $(this).val();
            $.ajax({
                url: "{{route('section.getSection')}}",
                type: "GET",
                data: {id:id},
                success: function(data){
                    let html = '';
                    $.each(data, function(key, value){
                        html += '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#section_id').html(html);
                }
            });
        });
    });
</script>
@endsection