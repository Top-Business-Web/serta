@extends('layouts/site/app')

@section('site')
    <link rel="stylesheet" href="{{url('site')}}/css/blog_style.css">

<style>
    .navbar .navbar-brand img {
        height: 45px !important;
        margin: 0px 10px;
        border-radius: 10px;
        padding: 2px;
        width: auto !important;
    }
    .details-blog-link{
        color: black;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .details-blog-link:hover{
        color:black;
    }
</style>
    <div class="about-us mt-5">

        <div  class="bg-top d-flex align-items-end" style="background-image: url({{get_file($about->image)}})">
            <div class="overlay"></div>
            <h1 class="p-5 head font-weight-bold">{{__('Blogs')}}</h1>
        </div>

        <div class="container">

            <div class="links-arrow p-2 mt-3 d-flex align-items-center justify-content-center">
                <p> <a href="{{ url('/') }}">{{__('Home')}}</a> <i class="fas px-2 fa-long-arrow-alt-right"></i> {{__('Blogs')}}</p>
            </div>
            <div class="row py-5" data-aos="zoom-in">


                <!--=====================================
                        BLOG LIST START
                    =====================================-->
                <section class="tf__blog_page mt-5 mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    @foreach($blogs as $blog)
                                    <div class="col-12 wow fadeInUp" data-wow-duration="1s">
                                        <div class="tf__featured_blog">
                                            <div class="tf__featured_blog_img">
                                                <img src="{{$blog->image}}" alt="blog" class="img-fluid w-100">
                                            </div>
                                            <div class="tf__featured_blog_text">
                                                @php
                                                    $title_slug = $blog->title;
                                                    $slug = Str::slug($title_slug);
                                                @endphp
                                                <a href="{{ route('blog',$slug)}}" class="title">{{$blog->title}}</a>
                                                <p>
                                                    <a class="details-blog-link" href="{{ route('blog',$blog->id)}}">
                                                        {!! $blog->description !!}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4 mt-5">
                                <div class="tf__service_sidebar" id="sticky_sidebar">
                                    <div class="tf__sidebar_blog sidebar_item mb_25">
                                        <h3>Recent Blog Post</h3>
                                        <ul>
                                            @foreach($latest_blogs as $l_blog)

                                            <li>
                                                <a href="#">
                                                    <div class="img me-2">
                                                        <img src="{{$l_blog->image}}" alt="blog" class="img-fluid w-100">
                                                    </div>
                                                    <div class="text">
                                                        <span><i class="fas fa-calendar-alt"></i> {{$l_blog->title}}</span>
                                                        <p>{{$l_blog->title}}</p>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--=====================================
                    BLOG LIST END
                =====================================-->
            </div>
        </div>
    </div>



@endsection
