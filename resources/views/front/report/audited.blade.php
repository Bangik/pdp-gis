@extends('layouts.front.app')
@section('content')
<!--breadcrumb section start-->
<section class="agency breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-text text-center">Laporan Audit</h2>
                <ul class="breadcrumb justify-content-center">

                    <li><a href="{{route('landing')}}">beranda</a></li>
                    <li>laporan</li>
                    <li>laporan Audit</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end -->

<section class="agency blog blog-sec">
    <div class="container no-side">
        <div class="row">
            @for ($i = 6; $i >= 1; $i--)
            <div class="col-xl-4 col-md-6">
                <div class="blog-agency">
                    <div class="blog-contain">
                        <img alt="" class="img-fluid" src="{{asset('front/images/event/blog/8.jpg')}}">
                        <div class="img-container center-content">
                            <div class="center-content">
                                <div class="blog-info">
                                    <h5 class="blog-head font-600">Laporan Tahun 202{{$i}}</h5>
                                    <div class="btn-bottom m-t-20 text-center">
                                        <a class="text-uppercase" href="#">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection