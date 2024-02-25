@extends('site.layouts.master')

@section('content')



    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg" style="background-image: url('{{ asset($bgImages->about_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.about_us') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.about_us') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About Section  -->

    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <h2>{{ app()->getLocale() == 'ar' ? $about->top_title_ar : $about->top_title_en }}</h2>
                        </div>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="about-content-left">
                                        <p class="highlight mb-5">{{ app()->getLocale() == 'ar' ? $about->top_desc_ar : $about->top_desc_en }}
                                        </p>
                                        <button class="main-btn bg-brown mb-3" onclick="profDownload()">
                                            {{ trans('site.Profile_company') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset($about->image) }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Choose Us Area  -->

    <div class="why-choose-two pb-0 mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-two_left">
                        <div class="why-choose-two_img">
                            <img src="{{ asset($aboutUs->img) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-two_right">
                        <div class="section-title text-left">
                            <!-- <h6>{{ trans('site.our_pontential_benefits') }}</h6> -->
                            <h2>{{ app()->getLocale() == 'ar' ? $about->title_ar : $about->title_en }}</h2>
                        </div>
                        <p class="highlight">
                            {{ app()->getLocale() == 'ar' ? $about->desc_ar : $about->desc_en }}
                        </p>
{{--                        <p class="why-choose-two_right-text">--}}
{{--                            {{ trans('site.in_2022_enviro_group_starts') }}--}}
{{--                        </p>--}}
                        <!-- <ul class="list-unstyled why-choose-two_points">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>{{ trans('site.comfort_pickup') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>{{ trans('site.reducing_waste') }}</p>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Process Section  -->

     <div class="process-area dark-bg mb-5">
        <div class="container">
            <!-- <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="section-title">
                                    <h6>{{ trans('site.recycling_wastage_save_environment') }}</h6>
                                    <h2 class="text-white">{{ trans('site.simple_steps_wastage') }}
                                        <br> {{ trans('site.to_recycling_item_processing') }}</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="process-right-content">
                                    <p class="text-white">{{ trans('site.recycling_is_the_process_of_converting') }}</p>
                                    <p class="text-white">{{ trans('site.this_waste_management_video') }}</p>
                                    <div class="process-btn">
                                        <a href="{{ route('contact') }}" class="main-btn">{{ trans('site.get_started') }}</a>
                                        <a href="{{ route('service') }}"
                                           class="main-btn white">{{ trans('site.view_our_services') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->


            <div class="process-item-wrap row">
            <div class="col-lg-3 col-12">
                    <div class="process-single two">
                        <div class="process-icon">
                            <img src="{{ asset($setting->logo_mission) }}" alt="" style="width: 100px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ app()->getLocale() == 'ar' ? $setting->title_mission_ar : $setting->title_mission_en }}
                            </h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                {{ app()->getLocale() == 'ar' ? $setting->desc_mission_ar : $setting->desc_mission_en }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="process-single">
                        <div class="process-icon">
                            <img src="{{ asset($setting->logo_vision) }}" alt="" style="width: 100px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ app()->getLocale() == 'ar' ? $setting->title_vision_ar : $setting->title_vision_en }}
                            </h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                {{ app()->getLocale() == 'ar' ? $setting->desc_vision_ar : $setting->desc_vision_en }}
                            </p>
                            <div>
                            <img src="{{ asset('assets/front') }}/assets/img/R.red.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="process-single three image-value">
                        <div class="process-icon">
                            <img src="{{ asset($setting->logo_values) }}" alt="no-image" style="height: 580px;">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- CTA -->
    <!-- <div class="cta-area-2 mt-100 dark-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <h2>{{ trans('site.lets_get_your_project') }} <b>{{ trans('site.started') }}</b> {{ trans('site.today') }}!</h2>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12">
                    <div class="cta-btn-2 mt-20">
                        <a href="{{ route('quote') }}" class="main-btn">{{ trans('site.get_a_quote') }}</a>
                        <a href="{{ route('contact') }}" class="main-btn white">{{ trans('site.contact_with_us') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script>
        function profDownload(){
          var link =  window.open('{{ asset($setting->profile) }}', '_blank');
        }
    </script>
@endsection


