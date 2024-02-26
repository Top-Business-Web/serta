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
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.architecture') }}</h6>
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
                            <div class="product-img">
                            <img src="{{ asset('assets/front') }}/assets/img/Untitled-2.jpg" alt="">
                            </div>
                            <div class="product-img">
                            <img src="{{ asset('assets/front') }}/assets/img/Untitled-2.jpg" alt="">
                            </div>
                            <div class="product-img">
                            <img src="{{ asset('assets/front') }}/assets/img/Untitled-2.jpg" alt="">
                            </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="d-flex mb-5">
                        <div class="icon-client">
                        <img src="{{ asset('assets/front') }}/assets/img/hand.png" style="width: 65px; height:65px;">
                        </div>
                        <div>
                        <p style="margin-bottom: 0;">@lang('site.client')</p>
                        <h6>client1</h6>
                        </div>
                    </div>
                    <div class="title">
                        <h2 style="font-size: 30px;">title</h2>
                    </div>
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas maxime perspiciatis, ducimus provident ipsum officia aut eos architecto error! Quo sed exercitationem assumenda nisi quisquam possimus libero animi expedita accusantium.
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
                    <h6 class="text-center">الموقع</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/industry.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.industry')</p>
                    <h6 class="text-center">عام</h6>
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
                    <h6 class="text-center">فلل</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/progress.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.status')</p>
                    <h6 class="text-center">تحت الانشاء</h6>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="d-flex justify-content-center mb-3">
                        <img src="{{ asset('assets/front') }}/assets/img/year.png" style="width: 65px; height:65px;">
                    </div>
                    <p class="text-center" style="margin-bottom: 0;">@lang('site.year')</p>
                    <h6 class="text-center">2023</h6>
                </div>
            </div>
        </div>

        <div class="product">
        <div class="container mt-5 pt-5">
            <div class="title mt-3 mb-4">
                <h2>{{ trans('site.related_projects') }}</h2>
            </div>
            <div class="owl-carousel owl-theme">
                        <div class="project-single m-2">
                            <div class="project-img">
                                <a href="#" class="w-100">
                                    <img src="{{ asset('assets/front') }}/assets/img/Untitled-2.jpg" alt="" style="height: 250px;">
                                </a>
                            </div>
                            <div class="project-content">
                                <div class="project-title text-center">
                                    <a href="#"
                                       class="fs-5">title</a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        </div>
    </div>


@endsection
