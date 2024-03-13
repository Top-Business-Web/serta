@extends('site.layouts.master')

@section('content')



    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg" style="background-image: url('{{ asset($bgImages->product_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.projects') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / <a href="{{ route('getSubCategory', $data['product']->subCategory->category->id) }}">{{ app()->getLocale() == 'ar' ? $data['product']->subCategory->category->title_ar : $data['product']->subCategory->category->title_en }}</a> / {{ app()->getLocale() == 'ar' ? $data['product']->subCategory->title_ar : $data['product']->subCategory->title_en }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="project-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-4">
                    <div class="main-slider">
                        @foreach($data['product']->images as $img)
                            <div class="product-img">
                                <img
                                    class="img-fluid"
                                    src="{{ asset($img) }}"
                                    alt="product image"
                                />
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
                        <h6>{{ app()->getLocale() == 'ar' ? $data['product']->customer_ar  : $data['product']->customer_en  }}</h6>
                        </div>
                    </div>
                    <div class="title">
                        <h2 style="font-size: 30px;">{{ app()->getLocale() == 'ar' ? $data['product']->title_ar : $data['product']->title_en }}</h2>
                    </div>
                    <p class="mt-3">
                        {{ app()->getLocale() == 'ar' ? $data['product']->desc_ar : $data['product']->desc_en }}
                    </p>
                </div>
            </div>
        </div>

        <!-- description -->

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/pin.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.location')</p>
                    <h6 class="text-center">{{ app()->getLocale() == 'ar' ? $data['product']->location_ar : $data['product']->location_en }}</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/industry.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.industry')</p>
                    <h6 class="text-center">{{ $data['product']->sector->value }}</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/sector.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.sector')</p>
                    <h6 class="text-center">{{ app()->getLocale() == 'ar' ? $data['product']->subCategory->category->title_ar : $data['product']->subCategory->category->title_en }}</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/sub-sector.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.sub_sector')</p>
                    <h6 class="text-center">{{ app()->getLocale() == 'ar' ? $data['product']->subCategory->title_ar : $data['product']->subCategory->title_en }}</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/progress.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.status')</p>
                    <h6 class="text-center">{{ $data['product']->status == 0 ? 'Complete' : 'On Going' }}</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/year.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.year')</p>
                    <h6 class="text-center">{{ $data['product']->year }}</h6>
                </div>
            </div>
        </div>

        <div class="product">
        <div class="container mt-5 pt-5">
            <div class="title mt-3 mb-4">
                <h2>{{ trans('site.related_projects') }}</h2>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($data['related'] as $related)
                    <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12"> -->
                        <div class="project-single m-2">
                            <div class="project-img">
                                <a href="{{ route('singleProduct', $related->id) }}" class="w-100">
                                    <img src="{{ asset($related->images[0]) }}" alt="" style="height: 250px;">
                                </a>
                            </div>
                            <div class="project-content">
                                <div class="project-title text-center">
                                    <a href="{{ route('singleProduct', $related->id) }}"
                                       class="fs-5">{{ app()->getLocale() == 'ar' ? $related->title_ar : $related->title_en }}</a>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                @endforeach
            </div>
        </div>
        </div>
    </div>

@endsection

