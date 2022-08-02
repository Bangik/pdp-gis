@extends('layouts.front.app')
@section('content')
<!--breadcrumb section start-->
<section class="agency breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-text text-center">Berita</h2>
                <ul class="breadcrumb justify-content-center">

                    <li><a href="{{route('landing')}}">beranda</a></li>
                    <li>informasi</li>
                    <li>berita</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end -->

<section class="agency blog blog-sec">
    <div class="container no-side">
        <div class="row">
            @for ($i = 1; $i <= 6; $i++)
            <div class="col-xl-4 col-md-6">
                <div class="blog-agency">
                    <div class="blog-contain">
                        <img alt="" class="img-fluid" src="{{asset('front/images/event/blog/8.jpg')}}">
                        <div class="img-container center-content">
                            <div class="center-content">
                                <div class="blog-info">
                                    <div class="m-b-20">
                                        <div class="center-text">
                                            <i aria-hidden="true" class="fa fa-clock-o m-r-10"></i>
                                            <h6 class="m-r-25 font-blog">June 19, 2019</h6>
                                        </div>
                                    </div>
                                    <h5 class="blog-head font-600">Judul Berita hari ini yaitu judul {{$i}}</h5>
                                    <p class="para2">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the.
                                    </p>
                                    <div class="btn-bottom m-t-20">
                                        <a class="text-uppercase" href="#">Selengkapnya</a>
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