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
                <div class="col-12">
                    <div class="blog-details_left">
                        <div class="d-flex justify-content-center">
                            {{-- <div class="main-slider">
                                @foreach ($news->images as $image)
                                    <div class="blog-details_img">
                                        <img src="{{ asset($image) }}" alt="" style="height: 500px;">
                                    </div>
                                @endforeach
                            </div> --}}

                            <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img src="{{ asset($news->main_image) }}" style="height:600px !important;" alt="no-image">
                                        </li>
                                        @foreach($news->images as $image)
                                            <li class="splide__slide">
                                                <img src="{{ asset($image) }}" style="height:600px !important;" alt="no-image">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </section>
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
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ trans('site.latest_news') }}</h2>
                    </div>
                    <div class="row">
                        @foreach ($latestNews as $latestNew)
                            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                                style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                <div class="services-two_single card-news">
                                    <div class="services-two_img-box">
                                        <div class="services-two_img">
                                            <a href="{{ route('news.details', $latestNew->id) }}" class="w-100">
                                                <img src="{{ asset($latestNew->main_image) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="services-two_content">
                                        <span
                                            style="color: gray; margin-bottom: 8px; font-size: 13px;">{{ $latestNew->created_at->format('d, F Y') }}</span>
                                        <h3 class="services-two_title">
                                            <a href="{{ route('news.details', $latestNew->id) }}">
                                                {{ app()->getLocale() == 'ar' ? $latestNew->title_ar : $latestNew->title_en }}
                                            </a>
                                        </h3>
                                        <div class="services-two_bottom">
                                            <a href="{{ route('news.details', $latestNew->id) }}"
                                                class="services-one_btn d-flex">
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
        </div>
    </section>
    <!--News Details End-->
    <script>
        var splide = new Splide('#main-carousel', {
            pagination: false,
            autoplay:true,
            type   : 'loop',
        });


        var thumbnails = document.getElementsByClassName('thumbnail');
        var current;


        for (var i = 0; i < thumbnails.length; i++) {
            initThumbnail(thumbnails[i], i);
        }


        function initThumbnail(thumbnail, index) {
            thumbnail.addEventListener('click', function() {
                splide.go(index);
            });
        }


        splide.on('mounted move', function() {
            var thumbnail = thumbnails[splide.index];


            if (thumbnail) {
                if (current) {
                    current.classList.remove('is-active');
                }


                thumbnail.classList.add('is-active');
                current = thumbnail;
            }
        });

        $(document).ready(function() {
            // Get the current URL path
            var currentPath = window.location.pathname;

            // Loop through each link and check if it matches the current path
            $('.service-details_sidebar-service-list a').each(function() {
                var linkPath = $(this).attr('href');

                // Check if the current path contains the link path
                if (currentPath.includes(linkPath)) {
                    // Add the 'current' class to the parent <li> tag
                    $(this).closest('li').addClass('current');
                }
            });
        });


        splide.mount();
    </script>
@endsection
