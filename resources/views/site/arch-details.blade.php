@extends('site.layouts.master')

@section('content')
    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area faq-bg" style="background-image: url('{{ asset($bgImages->faqs_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.architecture') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.architecture') }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--content -->

    <div class="project-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-4">
                    <div class="main-slider">
                        @foreach ($architecture->images as $images)
                            <div class="product-img">
                                <img src="{{ asset($images) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="d-flex mb-5">
                        <div class="icon-client">
                            <img src="{{ asset('assets/front') }}/assets/img/hand.png" style="width: 65px; height:65px;">
                        </div>
                        <div>
                            <p style="margin-bottom: 0;">@lang('site.client')</p>
                            <h6>client</h6>
                        </div>
                    </div>
                    <div class="title">
                        <h2 style="font-size: 30px;">
                            {{ app()->getLocale() == 'ar' ? $architecture->title_ar : $architecture->title_en }}</h2>
                    </div>
                    <p class="mt-3">
                        {{ app()->getLocale() == 'ar' ? $architecture->desc_ar : $architecture->desc_en }}
                    </p>
                </div>
            </div>
        </div>

        <!-- description -->

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/pin.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.location')</p>
                    <h6 class="text-center">
                        {{ app()->getLocale() == 'ar' ? $architecture->location_ar : $architecture->location_en }}</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/industry.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.industry')</p>
                    <h6 class="text-center">{{ $architecture->sector->value == 'public' ? (app()->getLocale() == 'ar' ? 'عام' : 'Public') : (app()->getLocale() == 'ar' ? 'خاص' : 'Private') }}</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/sector.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.sector')</p>
                    <h6 class="text-center">معمارى</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/sub-sector.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.sub_sector')</p>
                    <h6 class="text-center">
                        {{ app()->getLocale() == 'ar' ? $architecture->categoryArch->title_ar : $architecture->categoryArch->title_en }}
                    </h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/progress.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.status')</p>
                    <h6 class="text-center">
                        {{ $architecture->status == 0 ? (app()->getLocale() == 'ar' ? 'مكتمل' : 'Complete') : (app()->getLocale() == 'ar' ? 'قيد التنفيذ' : 'On Going') }}
                    </h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/year.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.year')</p>
                    <h6 class="text-center">{{ $architecture->year }}</h6>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="container mt-5 pt-5">
                <div class="title mt-3 mb-4">
                    <h2>{{ trans('site.related_projects') }}</h2>
                </div>
                <div class="owl-carousel owl-theme">
                    @foreach ($relatedArchitectures as $relatedArchitecture)
                        <div class="project-single m-2">
                            <div class="project-img">
                                <a href="{{ route('architecture.details', $relatedArchitecture->id) }}" class="w-100">
                                    <img src="{{ asset($relatedArchitecture->images[0]) }}" alt=""
                                        style="height: 250px;">
                                </a>
                            </div>
                            <div class="project-content">
                                <div class="project-title text-center">
                                    <a href="{{ route('architecture.details', $relatedArchitecture->id) }}"
                                        class="fs-5">{{ app()->getLocale() == 'ar' ? $relatedArchitecture->title_ar : $relatedArchitecture->title_en }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
