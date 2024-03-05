@extends('site.layouts.master')

@section('content')
    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area faq-bg" style="background-image: url('{{ asset($bgImages->news_img) }}')">
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

    <div class="service-area section-padding serv-bg">
        <div class="container">
            <div class="section-title">
                <h2>{{ app()->getLocale() == 'ar' ? 'أخبارنا' : 'News' }}</h2>
            </div>
            <div class="row">
                @foreach ($news as $new)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                        style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="services-two_single card-news">
                            <div class="services-two_img-box">
                                <div class="services-two_img">
                                    <a href="{{ route('news.details', $new->id) }}" class="w-100">
                                        <img src="{{ asset($new->images[0]) }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="services-two_content">
                                <span style="color: gray; margin-bottom: 8px; font-size: 13px;">{{ $new->created_at->format('d, F Y') }}</span>
                                <h3 class="services-two_title">
                                    <a href="{{ route('news.details', $new->id) }}">
                                        {{ app()->getLocale() == 'ar' ? $new->title_ar : $new->title_en }}
                                    </a>
                                </h3>
                                <div class="services-two_bottom">
                                    <a href="{{ route('news.details', $new->id) }}" class="services-one_btn d-flex">
                                        {{ trans('site.read_more') }}
                                        <div class="add">
                                            <p class="minus">+</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--content -->
@endsection
