@extends('site.layouts.master')

@section('content')

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area plastic-bg" style="background-image: url('{{ asset($bgImages->service_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ app()->getLocale() == 'ar' ? $data['single_service']->title_ar : $data['single_service']->title_en }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a>
                            / {{ app()->getLocale() == 'ar' ? $data['single_service']->title_ar : $data['single_service']->title_en }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Service Details Start-->
    <section class="service-details pb-50">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details_sidebar">
                        <div class="service-details_sidebar-service">
                            <ul class="service-details_sidebar-service-list list-unstyled">
                                @foreach ($data['services'] as $service)
                                    <li class="d-block {{ $service->id == $data['single_service']['id'] ? 'current' : '' }}"><a
                                                href="{{ route('singleService', $service->id) }}">{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}
                                            <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="service-details_need-help">
                            <div class="service-details_need-help-bg">
                            </div>
                            <h2 class="service-details_need-help-title">{{ trans('site.contact_with_us_for_any_advice') }}</h2>
                            <div class="service-details_need-help-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="service-details_need-help-contact">
                                <p>{{ trans('site.call_anytime') }}</p>
                                <a href="{{ $setting->phone }}">{{ $setting->phone }}</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details_right">

                        <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach($data['single_service']->images as $image)
                                        <li class="splide__slide">
                                            <img src="{{ asset($image) }}" alt="no-image">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>


                        <ul id="thumbnails" class="thumbnails">
                            @foreach($data['single_service']->images as $image)
                                <li class="thumbnail">
                                    <img src="{{ asset($image) }}" alt="">
                                </li>
                            @endforeach
                        </ul>

                        <div class="service-details_content">
                            <h3 class="service-details_title">{{ app()->getLocale() == 'ar' ? $data['single_service']->title_ar : $data['single_service']->title_en }}</h3>
                            <p class="service-details_text-1">{{ app()->getLocale() == 'ar' ? $data['single_service']->desc_ar : $data['single_service']->desc_en }} </p>
                        </div>
                        <!-- <ul class="service-details_two-icons list-unstyled">
                            <li class="service-details_two-icon-single">
                                <div class="service-details_two-icon">
								<span class="service-icon">
									<img src="{{ asset('assets/front') }}/assets/img/icon/1.png" alt="">
								</span>
                                </div>
                                <p class="service-details_two-icon-content" style="margin-top: 35px;">
                                    {{ trans('site.better_environment') }}
                        </p>
                    </li>
                    <li class="service-details_two-icon-single">
                        <div class="service-details_two-icon">
                        <span class="service-icon">
                            <img src="{{ asset('assets/front') }}/assets/img/icon/2.png" alt="">
								</span>
                                </div>
                                <p class="service-details_two-icon-content" style="margin-top: 35px;">
                                    {{ trans('site.better_future') }}
                        </p>
                    </li>
                </ul> -->
                        <!-- <p class="service-details_text-3">{{ trans('site.paper_gift') }}</p> -->
                        <!-- <div class="service-details_bottom">
                            <div class="service-details_bottom-icon">
                                <img src="assets/img/icon/recycling.png" style="width: 70px;" alt="">
                            </div>
                            <p class="service-details_bottom-text">{{ trans('site.recycling_is') }}</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->

    <script>

        var splide = new Splide('#main-carousel', {
            pagination: false,
        });


        var thumbnails = document.getElementsByClassName('thumbnail');
        var current;


        for (var i = 0; i < thumbnails.length; i++) {
            initThumbnail(thumbnails[i], i);
        }


        function initThumbnail(thumbnail, index) {
            thumbnail.addEventListener('click', function () {
                splide.go(index);
            });
        }


        splide.on('mounted move', function () {
            var thumbnail = thumbnails[splide.index];


            if (thumbnail) {
                if (current) {
                    current.classList.remove('is-active');
                }


                thumbnail.classList.add('is-active');
                current = thumbnail;
            }
        });

        $(document).ready(function () {
            // Get the current URL path
            var currentPath = window.location.pathname;

            // Loop through each link and check if it matches the current path
            $('.service-details_sidebar-service-list a').each(function () {
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


