@extends('layouts.front.app')
@section('content')
<!--breadcrumb section start-->
<section class="agency breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-text text-center">Profil Perusahaan</h2>
                <ul class="breadcrumb justify-content-center">

                    <li><a href="{{route('landing')}}">beranda</a></li>
                    <li><a href="{{route('about.me')}}">tentang kami</a></li>
                    <li>profil perusahaan</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--breadcrumb section end -->

<!-- section start -->
<section class="agency blog-sec blog-sidebar single_blog_item">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-2">
                <div class="blog-text">
                    <h3 class="blog-head">Profil Perusahaan Daerah Perkebunan Kabupaten Jember</h3></a>
                    <div class="blog-divider"></div>
                    <div class="blog-description">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but
                            also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the
                            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                            with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and
                            scrambled it to make a type specimen book. It has survived not only five centuries, but also
                            the leap into
                            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                            with the release
                            of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like
                            Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
            </div>
            @include('layouts.front.sidebar')
        </div>
    </div>
</section>
<!-- section end -->
@endsection