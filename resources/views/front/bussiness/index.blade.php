@extends('layouts.front.app')
@section('content')
<!--breadcrumb section start-->
<section class="agency breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-text text-center">Unit Bisnis {{$data['title']}}</h2>
                <ul class="breadcrumb justify-content-center">

                    <li><a href="{{route('landing')}}">beranda</a></li>
                    <li>unit bisnis</li>
                    <li>{{$data['title']}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end -->

<section class="event about">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="abouts">
                    <h2>{{$data['title']}}</h2>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </div>
            </div>
            <div class="col-md-4">
                <div class="announcer-img">
                    <img alt="" class="img-fluid" src="../front/images/event/1.jpg">
                    <img alt="" class="img-fluid" src="../front/images/event/1.jpg">
                    <img alt="" class="img-fluid" data-tilt data-tilt-max="3" data-tilt-perspective="500"
                        data-tilt-speed="400" src="{{$data['image']}}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection