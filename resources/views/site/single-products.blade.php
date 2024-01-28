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
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.projects') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="project-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
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
                    <div class="small-slider">
                        @foreach ($data['product']->images as $image)
                            <img
                                class="img-fluid"
                                src="{{ asset($image) }}"
                                alt="product image"
                            />
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="title">
                        <h2>{{ app()->getLocale() == 'ar' ? $data['product']->title_ar : $data['product']->title_en }}</h2>
                    </div>
                    <p class="mt-3">
                        {{ app()->getLocale() == 'ar' ? $data['product']->sub_title_ar : $data['product']->sub_title_en }}
                    </p>
                    <div class="mb-4 mt-2">
                        <span class="fw-bold me-2" style="color: #016A41;">{{ trans('site.category') }} :</span><span
                            style="color: #777;">{{ app()->getLocale() == 'ar' ? $data['product']->subCategory->title_ar : $data['product']->subCategory->title_en }}</span>
                    </div>
                    <hr>
                    <div class="blog-details_social-list mt-4">
                        <a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ $setting->facebook }}"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- description -->

        <div class="container mb-5 mt-5">
            <div class="tabs border-bottom border-3">
                <ul class="tabs-list">
                    <li class="show" data-content=".content-one">{{ trans('site.description') }}</li>
                    <li data-content=".content-two">{{ trans('site.additional_info') }}</li>
                </ul>
                <div class="content-list mt-5 mb-5">
                    <div class="content-one text-black-50">
                        <p>
                            {{ app()->getLocale() == 'ar' ? $data['product']->desc_ar : $data['product']->desc_en }}
                        </p>
                    </div>
                    <div class="content-two">
                        <table class="table border">
                            <tbody>
                            <tr>
                                @if($data['product']->details)
                                    @foreach ($data['product']->details as $detail)
                                        <td>{{ $detail['key'] }}</td>
                                        <td>{{ $detail['value'] }}</td>
                                    @endforeach
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="title mt-3 mb-4">
                <h2>{{ trans('site.related_projects') }}</h2>
            </div>
            <div class="row">
                @foreach ($data['related'] as $related)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="project-single">
                            <div class="project-img">
                                <img src="{{ asset($related->images[0]) }}" alt="">
                            </div>
                            <div class="project-content">
                                <div class="project-title text-center">
                                    <a href="{{ route('singleProduct', $related->id) }}"
                                       class="fs-5">{{ $related->title_ar }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

