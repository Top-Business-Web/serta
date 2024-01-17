@extends('site.layouts.master')

@section('content')

    <!-- Pre-Loader -->
    <div class="preloader"></div>

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area blog-bg" style="background-image: url('{{ asset($bgImages->news_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.jobs') }}</h1>
                        <h6><a href="index.blade.php">{{ trans('site.home') }}</a> / {{ trans('site.jobs') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section-->
    <div class="blog-area section-padding">
        <div class="container">
            <div class="row">
                @foreach ($data['blogs'] as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="single-blog-item">
                            <div class="blog-bg">
                                <img src="{{ asset('assets/admin/posts/images/'.$blog->image) }}" alt="">
                                    <?php
                                    $created_at = $blog->created_at;

                                    $month_name = date("F", strtotime($created_at));

                                    ?>
                                <span class="blog-date">{{ $blog->created_at->format('m') }} {{ $month_name }}</span>
                            </div>
                            <div class="blog-content">
                                <h5><a href="{{ route('career') }}">{{ app()->getLocale() == 'ar' ? $blog->title_ar : $blog->title_en }}</a></h5>
                                <p>{{ app()->getLocale() == 'ar' ? $blog->desc_ar : $blog->desc_en }}</p>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
