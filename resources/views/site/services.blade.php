@extends('site.layouts.master')

@section('content')

    <!-- Pre-Loader -->
    <div class="preloader"></div>

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area service-bg" style="background-image: url('{{ asset($bgImages->service_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.services') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.services') }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Service Area-->

    <div class="service-area section-padding">
        <div class="container">
            <div class="section-title">
                <h6>{{ trans('site.What_we’re_doing') }}</h6>
                <h2>{{ app()->getLocale() == 'ar' ? 'جمع ونقل المخلفات والخدمات البيئية' : 'Waste Management and environmental services' }}</h2>
            </div>
            <div class="row">
                @foreach ($data['services'] as $service)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                         style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <!--Services Two Single-->
                        <div class="services-two_single">
                            <div class="services-two_img-box">
                                <div class="services-two_img">
                                    <img src="{{ asset($service->images[0]) }}" alt="">
                                </div>
                                <div class="services-two_icon">
                                    <img src="{{ asset($service->image_logo) }}" alt="">
                                </div>
                            </div>
                            <div class="services-two_content">
                                <h3 class="services-two_title"><a
                                        href="{{ route('singleService', $service->id) }}">{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}</a>
                                </h3>
                                <p class="services-two_text">{{ app()->getLocale() == 'ar' ? $service->desc_ar : $service->desc_en }}</p>
                                <div class="services-two_bottom">
                                    <a href="{{ route('singleService', $service->id) }}"
                                       class="services-one_btn">{{ trans('site.read_more') }}</a>
                                    <a href="single_services.blade.php" class="services-one_arrow"><span
                                            class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Process Section  -->

    <!-- <div class="process-area dark-bg section-padding">
        <div class="container">
            <div class="process-item-wrap">
                <div class="col-lg-4 col-12">
                    <div class="process-single">
                        <div class="process-icon">
                            <img src="{{ asset('assets/front') }}/assets/img/vision.svg" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ trans('site.our_vision') }}</h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                {{ app()->getLocale() == 'ar' ? $aboutUs->desc_ar : $aboutUs->desc_en }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="process-single two">
                        <div class="process-icon">
                            <img src="{{ asset('assets/front') }}/assets/img/mission.svg" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ trans('site.our_mission') }}</h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                {{ app()->getLocale() == 'ar' ? $aboutUs->top_desc_ar : $aboutUs->top_desc_en }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="process-single three">
                        <div class="process-icon">
                            <img src="{{ asset('assets/front') }}/assets/img/process/4.png" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ trans('site.our_values') }} </h5>
                        </div>
                        <ul class="list-unstyled service-list mt-0">
                            <li><i class="fas fa-check"></i>{{ trans('site.build_relations') }}</li>
                            <li><i class="fas fa-check"></i>{{ trans('site.Integrity') }}</li>
                            <li><i class="fas fa-check"></i>{{ trans('site.accountabilit') }}</li>
                            <li><i class="fas fa-check"></i>{{ trans('site.excellence') }}</li>
                            <li><i class="fas fa-check"></i>{{ trans('site.innovation') }}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div> -->

@endsection

