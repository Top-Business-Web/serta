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
                        <h1>{{ trans('site.blog') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.blog') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--News Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details_left">
                        <div class="blog-details_img">
                            <img src="{{ asset('assets/admin/posts/images/' . $data['blog']->image) }}" alt="">
                            <div class="blog-details_date-box">
                                <?php
                                $created_at = $data['blog']->created_at;

                                $month_name = date("F", strtotime($created_at));

                                ?>
                                <p>{{ $data['blog']->created_at->format('m') }} {{ $month_name }}</p>
                            </div>
                        </div>
                        <div class="blog-details_content">
                            <h3 class="blog-details_title">{{ app()->getLocale() == 'ar' ? $data['blog']->title_ar : $data['blog']->title_en }}</h3>
                            <p class="blog-details_text-1 mb-4">{{ app()->getLocale() == 'ar' ? $data['blog']->desc_ar : $data['blog']->desc_en }}</p>
                        </div>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar_single sidebar_search">
                        </div>
                        <div class="sidebar_single sidebar_post">
                            <h3 class="sidebar_title">{{ trans('site.latest_post') }}</h3>
                            <?php $latest = \App\Models\Post::latest()->take(3)->get() ?>
                            <ul class="sidebar_post-list list-unstyled">
                                @foreach($latest as $post)
                                    <li>
                                        <div class="sidebar_post-image">
                                            <img src="{{ asset('assets/admin/posts/images/' . $post->image) }}" alt="">
                                        </div>
                                        <div class="sidebar_post-content">
                                            <h3>
                                                <a href="{{ route('singleBlog', $post->id) }}">{{ $post->title_ar }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="blog-details_bottom">
                            <div class="blog-details_social-list">
                                <a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $setting->facebook }}"><i class="fab fa-facebook"></i></a>
{{--                                <a href=""><i class="fab fa-pinterest-p"></i></a>--}}
                                <a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Details End-->

@endsection

