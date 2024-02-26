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

    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <h2>Architectural</h2>
                        </div>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="about-content-left">
                                        <p class="highlight mb-5">
                                        Sertah United co. is a limited liability company that started working in the field of contracting since 1979, it was established by Sheikh Saleh bin Abdullah Al Khalid, who is currently chairman of board of directors, it was accompanied by success after god’s blessing since 1979. and we are committed to provide the highest quality achieving customer satisfaction by providing high standards and professionalism
                                        </p>
                                        <button class="main-btn bg-brown mb-3">
                                            Design Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-img">
                    <img src="{{ asset('assets/front') }}/assets/img/42291708609827.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="project-area mb-5 mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="projects-filter">
                        <ul class="list-inline mb-0">
                            <li>
                                <a class="active-filter filter-a" href="">{{ trans('site.all') }}</a>
                            </li>
                            <li>
                                <a href=""class="filter-a">
                                    sub cat1
                                </a>
                            </li>
                            <li>
                                <a href=""class="filter-a">
                                    sub cat2
                                </a>
                            </li>
                            <li>
                                <a href=""class="filter-a">
                                    sub cat3
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="row productSearch">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="project-single">
                                    <div class="project-img">
                                        <a href="{{  route('archDetails',1) }}" class="w-100">
                                            <img src="{{ asset('assets/front') }}/assets/img/photo_2024-01-28_10-22-15.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-title text-center">
                                            <a href="{{  route('archDetails',1) }}" class="fs-5">archtitecture title</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="project-single">
                                    <div class="project-img">
                                        <a href="{{  route('archDetails',1) }}" class="w-100">
                                            <img src="{{ asset('assets/front') }}/assets/img/photo_2024-01-28_10-22-15.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-title text-center">
                                            <a href="{{  route('archDetails',1) }}" class="fs-5">archtitecture title</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="project-single">
                                    <div class="project-img">
                                        <a href="{{  route('archDetails',1) }}" class="w-100">
                                            <img src="{{ asset('assets/front') }}/assets/img/photo_2024-01-28_10-22-15.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-title text-center">
                                            <a href="{{  route('archDetails',1) }}" class="fs-5">archtitecture title</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--content -->

@endsection
