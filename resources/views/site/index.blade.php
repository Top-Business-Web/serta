@extends('site.layouts.master')

@section('content')
    <!-- Hero Area hi -->
    {{-- <div class="homepage-slides owl-carousel owl-theme"> --}}

    @foreach ($data['sliders'] as $slider)
        <div class="single-slide-item">
            <video autoplay muted loop playsinline style="width: 100%;">
                <source src="{{ asset('assets/admin/sliders/images/' .$slider->image) }}" type="video/mp4">
            </video>
            <div class="image-layer">
                <!-- <div class="overlay"></div> -->
                <div class="title-container wow bounceInUp" data-wow-duration="2s">
                    <h2 class="video-title text-white">{{ app()->getLocale() == 'ar' ? $slider->title_ar : $slider->title_en }}</h2>
                </div>
            </div>
            <!-- <div class="hero-area-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 wow fadeInUp animated" data-wow-delay=".2s">
                                    <div class="section-title">
                                        <h6>{{ app()->getLocale() == 'ar' ? $slider->sub_title_ar : $slider->sub_title_en }}
                                        </h6>
                                        <h1>{{ app()->getLocale() == 'ar' ? $slider->title_ar : $slider->title_en }}</h1>
                                    </div>
                                    <div class="right-btn">
                                        <a href="{{ route('about') }}"
                                            class="main-btn primary">{{ trans('site.learn_more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
        </div>
    @endforeach
    {{-- </div> --}}

    <!-- About Section  -->

    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="about-content-wrap wow bounceInUp" data-wow-duration="2s" data-wow-offset="100">
                        <div class="section-title">
                            <!-- <p>Complete Commercial And Residential Recycling Services!</p> -->
                            <h2>{{ trans('site.The_pioneers') }}</h2>
                        </div>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="about-content-left">
                                        <p class="highlight mb-5">
                                            {{ app()->getLocale() == 'ar' ? $aboutUs->top_desc_ar : $aboutUs->top_desc_en }}
                                        </p>

                                        <!--<p>-->
                                        <!--    {{ trans('site.enviro_group_aims') }}-->
                                        <!--</p>-->
                                        <button class="main-btn bg-brown mb-3"
                                            onclick="profDownload('{{ asset($setting->profile) }}', 'profile Company')">{{ trans('site.Profile_company') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Service Section  -->

    <!-- <div class="service-area gray-bg section-padding pt-200">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h6>{{ trans('site.sustainable') }}</h6>
                        <h2>{{ trans('site.we_provide') }}</h2>
                    </div>
                </div>
            </div>
            <div class="service mt-30 owl-carousel owl-theme">
                @foreach ($data['services'] as $service)
                    <div class="service-single ms-2 me-2">
                        <div class="service-icon">
                            <img src="{{ $service->image_logo }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4>
                                <a href="{{ route('singleService', $service->id) }}">{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}
                                </a>
                            </h4>
                            <hr>
                            <p>{{ app()->getLocale() == 'ar' ? $service->desc_ar : $service->desc_en }}</p>
                            {{-- <ul class="list-unstyled service-list">
                                <li><i class="fas fa-check"></i>{{ trans('site.collect_separate_materials')}}</li>
                                <li><i class="fas fa-check"></i>{{ trans('site.reduce_recycling_into_raw_material') }}
                                </li>
                                <li><i class="fas fa-check"></i>{{ trans('site.turn_raw_material_into_product') }}</li>
                            </ul> --}}
                            <a class="main-btn primary"
                                href="{{ route('singleService', $service->id) }}">{{ trans('site.find_out_more') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> -->

     <!-- Choose Us Area  -->

     <!-- <div class="why-choose-two section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h6>{{ trans('site.our_pontential_benefits') }}</h6>
                <h2>{{ trans('site.why_you_should_choose_our_services') }}</h2>
            </div>
            <div class="mt-5">
                <div class="row">
                    @foreach ($data['benefits'] as $benefit)
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <div class="feature-card">
                                <div class="feature-icon mb-3">
                                    <img src="{{ asset('assets/admin/sliders/images/' . $benefit->image) }}"
                                        alt="no-image">
                                </div>
                                <div class="feature-title">
                                    <h3>{{ app()->getLocale() == 'ar' ? $benefit->title_ar : $benefit->title_en }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> -->

    <!-- Contact Section  -->

    <!-- <div class="contact-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <div class="contact-wrap">
                                    <div class="section-title">
                                        <h2 class="text-white">{{ trans('site.time_is_the_best_way_to_thin_About_recycling') }}</h2>
                                    </div>
                                    <div class="contact-desc">
                                        <p class="text-white">
                                            {{ trans('site.we_offer_product') }}
                                        </p>
                                    </div>
                                    <div class="contact-list-wrap">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                                                <ul class="list-unstyled contact-list">
                                                    <li><i class="fas fa-check"></i> {{ trans('site.reduce_greenhouse_effect') }}
                                                    </li>
                                                    <li><i class="fas fa-check"></i>{{ trans('site.conserv_natural_resources') }}
                                                    </li>
                                                    <li><i class="fas fa-check"></i>{{ trans('site.reduces_carbon_emissions') }}
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                                                <ul class="list-unstyled contact-list">
                                                    <li><i class="fas fa-check"></i>{{ trans('site.protects_ecosystems') }}</li>
                                                    <li><i class="fas fa-check"></i>{{ trans('site.economic_Benefits') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-btn">
                                        <a class="main-btn" href="{{ trans('about') }}">{{ trans('site.learn_more') }}</a>
                                        <a class="main-btn white" href="{{ trans('faqs') }}">{{ trans('site.our_core_values') }}</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 offset-xl-1">
                                <div class="quotation-wrap">
                                    <div class="quotation-inner">
                                        <h5 class="quotation-heading">{{ trans('site.get_a_quote') }}</h5>
                                        <p class="quotation-desc">
                                            {{ trans('site.we_take_great_pride') }}
                                        </p>
                                        <form class="quoteForm" id="quoteForm">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="contact-usage">{{ trans('site.first_name') }}
                                                    </label>
                                                    <input class="form-control" type="text" name="first_name"
                                                           placeholder="{{ trans('site.first_name') }}" required=""/>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="contact-usage">{{ trans('site.last_name') }}
                                                    </label>
                                                    <input class="form-control" type="text" name="last_name"
                                                           placeholder="{{ trans('site.last_name') }}" required=""/>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="contact-usage">{{ trans('site.name_company') }}
                                                    </label>
                                                    <input class="form-control" type="text" name="company"
                                                           placeholder="{{ trans('site.name_company') }}"
                                                           required=""/>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="contact-usage">{{ trans('site.phone') }}
                                                    </label>
                                                    <input class="form-control" type="number" name="phone"
                                                           placeholder="{{ trans('site.phone') }}"
                                                           required=""/>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="contact-usage">{{ trans('site.email') }}
                                                    </label>
                                                    <input class="form-control" type="email" name="email"
                                                           placeholder="{{ trans('site.email') }}" required=""/>
                                                </div>

                                                <div class="col-12">
                                                    <button type="button" id="quote-btn"
                                                            class="main-btn primary">{{ trans('site.submit') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

    <!-- product Section  -->

    <div class="project-area pt-5 pb-5">
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h6>{{ trans('site.innovation_quality_and_continuous_improvement') }}</h6>
                        <h2>{{ trans('site.latest_projects') }}</h2>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="owl-carousel owl-theme">
                    @foreach ($data['products'] as $product)
                        <div class="project-single ms-2 me-2">
                            <div class="project-img">
                                <a href="{{ route('singleProduct', $product->id) }}" class="w-100">
                                <img src="{{ asset($product->images[0]) }}" alt="">
                                </a>
                            </div>
                            <div class="project-content">
                                <div class="project-title text-center">
                                    <a href="{{ route('singleProduct', $product->id) }}"
                                        class="fs-5">{{ app()->getLocale() == 'ar' ? $product->title_ar : $product->title_en }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <!-- certificate -->
    <div class="certificate-area gray-bg section-padding">
        <div class="container">
            <div class="section-title" style="text-align: center;">
                <h6 class="">Certification</h6>
                <h2>Our Certification</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="certificate-image m-2">
                        <img src="{{ asset('assets/front/') }}/assets/img/Al-Bawani-baner-design8-1536x1078.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- paretner -->
    <div class="partner-area section-padding">
        <div class="container">
            <div class="section-title" style="text-align: center;">
                <h6 class="">{{ trans('site.partner_success') }}</h6>
                <h2>{{ trans('site.our_partner')}}</h2>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($data['partners_success'] as $partner_success)
                        <div class="card-image m-2">
                            <img src="{{ asset($partner_success->second_image) }}" class="img-partner move-up">
                            <img src="{{ asset($partner_success->image) }}" class="img-partner move-down">
                        </div>
                @endforeach

            </div>
        </div>
    </div>

    {{--    aya modal --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d-flex justify-content-end pt-2 pe-2">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="rounded" src="{{ asset($setting->licenese) }}" style="height: 550px" alt="licenses">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area -->


    <script>
        $('#quote-btn').on('click', function(e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById("quoteForm"));
            $.ajax({
                'method': 'post',
                'type': 'POST',
                'data': formData,
                '_token': "{{ csrf_token() }}",
                'url': "{{ route('quote.store') }}",
                beforeSend: function(formData) {
                    $('#quote-btn').html('Loading ... ');
                },
                success: function(data) {
                    if (data.status === 200) {
                        toastr.success('سنتواصل معك في اقرب وقت');
                        $('#quoteForm input').val('');
                        $('#quote-btn').html('سنتواصل معك في اقرب وقت');
                        $('#quote-btn').prop('disabled', true);
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000)
                    }
                },
                error: function(data) {
                    if (data.status === 500) {
                        toastr.error('error sending message !!');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function(key, value) {
                            // alert(value);
                            if ($.isPlainObject(value)) {
                                $.each(value, function(key, value) {
                                    toastr.error('' + value);
                                    // alert(value);
                                });
                            }
                        });
                        $('#quote-btn').html('error');
                    }
                },
                cache: false,
                processData: false,
                contentType: false
            })
        })


        function profDownload() {
            var link = window.open('{{ asset($setting->profile) }}', '_blank');
            link.download = 'profile Company.pdf'
        }
    </script>
@endsection
