@extends('site.layouts.master')

@section('content')
    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area faq-bg" style="background-image: url('{{ asset($bgImages->faqs_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.news') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.news') }}</h6>
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
                    <div class="main-slider">
                    <div class="blog-details_img">
                            <img src="{{ asset('assets/admin/sliders/images/' . $news->image) }}" alt=""
                                style="height: 500px;">
                        </div>
                        <div class="blog-details_img">
                            <img src="{{ asset('assets/admin/sliders/images/' . $news->image) }}" alt=""
                                style="height: 500px;">
                        </div>
                        <div class="blog-details_img">
                            <img src="{{ asset('assets/admin/sliders/images/' . $news->image) }}" alt=""
                                style="height: 500px;">
                        </div>
                    </div>
                        <div class="blog-details_date-box">
                                <p>{{ $news->created_at->format('d, F') }}</p>
                            </div>
                        <div class="blog-details_content">
                            <h3 class="blog-details_title">
                                {{ app()->getLocale() == 'ar' ? $news->title_ar : $news->title_en }}</h3>
                            <p class="blog-details_text-1 mb-4">
                                {{ app()->getLocale() == 'ar' ? $news->desc_ar : $news->desc_en }}</p>
                        </div>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar_single sidebar_search">
                        </div>
                        <div class="sidebar_single sidebar_post">
                            <h3 class="sidebar_title">{{ trans('site.latest_news') }}</h3>
                            <ul class="sidebar_post-list list-unstyled">
                                @foreach ($latestNews as $latestNew)
                                    <li>
                                        <div class="sidebar_post-image">
                                            <img src="{{ asset('assets/admin/sliders/images/' . $latestNew->image) }}"
                                                alt="">
                                        </div>
                                        <div class="sidebar_post-content">
                                            <h3>
                                                <a href="{{ route('news.details', $latestNew->id) }}">{{ app()->getLocale() == 'ar' ? $latestNew->title_ar : $latestNew->title_en }}</a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Details End-->
@endsection
