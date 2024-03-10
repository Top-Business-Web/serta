@extends('site.layouts.master')

@section('content')
<!-- Hero Area hi -->
{{-- <div class="homepage-slides owl-carousel owl-theme"> --}}

@foreach ($data['sliders'] as $slider)
<div class="single-slide-item">
    <video autoplay muted loop playsinline style="width: 100%;">
        <source src="{{ asset('assets/admin/sliders/images/' . $slider->image) }}" type="video/mp4">
    </video>
    <div class="image-layer">
        <div class="overlay"></div>
        <div class="title-container wow bounceInDown" data-wow-duration="2s">
            <h2 class="video-title text-white">
                {{ app()->getLocale() == 'ar' ? $slider->title_ar : $slider->title_en }}
            </h2>
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
            <div class="col-12 col-lg-6">
                <div class="about-content-wrap">
                    <div class="section-title">
                        <!-- <p>Complete Commercial And Residential Recycling Services!</p> -->
                        <h2>{{ app()->getLocale() == 'ar' ? $data['setting']->top_title_ar : $data['setting']->top_title_en }}
                        </h2>
                    </div>
                    <div class="about-content">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="about-content-left">
                                    <p class="highlight mb-5">
                                        {{ app()->getLocale() == 'ar' ? $data['setting']->top_desc_ar : $data['setting']->top_desc_en }}
                                    </p>

                                    <!--<p>-->
                                    <!--    {{ trans('site.enviro_group_aims') }}-->
                                    <!--</p>-->
                                    <button class="main-btn bg-brown mb-3" onclick="profDownload('{{ asset($setting->profile) }}', 'profile Company')">{{ trans('site.Profile_company') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="about-img">
                    <img src="{{ asset($aboutUs->image) }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- project mangement -->
<div class="mangement">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="pen wow bounceInDown" data-wow-duration="2s" data-wow-offset="100">
                    <img src="{{ asset('assets/front/') }}/assets/img/{{ app()->getLocale() == 'ar' ? 'pen2' : 'pen3' }}.png">
                </div>
                
                <div class="mobile wow zoomIn" data-wow-duration="2s" data-wow-offset="100">
                    <img src="{{ asset('assets/front/') }}/assets/img/tablet.png">
                </div>
            </div>
            <div class="col-lg-4 col-12 d-flex align-items-center">
                <div class="content wow bounceInUp" data-wow-duration="2s" data-wow-offset="100">
                    <h2 class="mb-2 title-management">@lang('site.project_mangement')</h2>
                    <p>@lang('site.content_mangement')</p>
                    <button class="main-btn bg-brown mb-3">
                        <a href="#" class="text-white">@lang('site.read_more')</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- product Section  -->

<div class="project-area pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title">
                    <!-- <h6>{{ trans('site.innovation_quality_and_continuous_improvement') }}</h6> -->
                    <h2>{{ trans('site.latest_projects') }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="product">
            <div class="owl-carousel owl-theme">
                @foreach ($data['products'] as $product)
                <div class="project-single ms-2 me-2" style="margin-bottom: 0px;">
                    <div class="project-img">
                        <a href="{{ route('singleProduct', $product->id) }}" class="w-100">
                            <img src="{{ asset($product->images[0]) }}" alt="" style=" height: 250px;">
                        </a>
                    </div>
                    <div class="project-content">
                        <div class="project-title text-center">
                            <a href="{{ route('singleProduct', $product->id) }}" class="fs-5">{{ app()->getLocale() == 'ar' ? $product->title_ar : $product->title_en }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>


<!-- certificate -->
<div class="certificate-area">
    <div class="container">
        <div class="section-title">
            <!-- <h6 class="">Certification</h6> -->
            <h2>{{ trans(('site.certification')) }}</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="certificate-image certificate-hidden m-2">
                    <img src="{{ asset('assets/front/') }}/assets/img/Al-Bawani-baner-design8-1536x1078.png">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="card-certificate">
                    @foreach ($data['certificates'] as $key => $certificate)
                    <div class="DemoBS2">
                        <button type="button" class="btn btn-certificate d-flex justify-content-between hover-certificate fs-3" data-toggle="collapse" data-target="#toggle-example{{ $key }}">
                            {{ app()->getLocale() == 'ar' ? $certificate->question_ar : $certificate->question_en }}
                            <div class="add-certificate">
                                <p class="plus">+</p>
                                <p class="minus">-</p>
                            </div>
                        </button>
                        <div id="toggle-example{{ $key }}" class="collapse">
                            <div class="">
                                <p>
                                    {{ app()->getLocale() == 'ar' ? $certificate->answer_ar : $certificate->answer_en }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
</div>



<!-- paretner -->
<div class="partner-area section-padding">
    <div class="container">
        <div class="section-title">
            <!-- <h6 class="">{{ trans('site.partner_success') }}</h6> -->
            <h2>{{ trans('site.our_partner') }}</h2>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach ($data['partners_success'] as $partner_success)
            <div class="card-image m-2 d-flex justify-content-center">
                <img src="{{ asset($partner_success->second_image) }}" class="img-partner move-up">
                <img src="{{ asset($partner_success->image) }}" class="img-partner move-down">
            </div>
            @endforeach

        </div>
    </div>
</div>

<!-- news -->

<div class="service-area serv-bg mb-5">
        <div class="container">
            <div class="section-title">
                <h2>{{ app()->getLocale() == 'ar' ? ' أحدث الأخبار' : ' Latest News' }}</h2>
            </div>
            <div class="row">
                @foreach ($data['news'] as $new)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                        style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="services-two_single card-news">
                            <div class="services-two_img-box">
                                {{-- @foreach --}}
                                <div class="services-two_img">
                                    <a href="{{ route('news.details', $new->id) }}" class="w-100">
                                        <img src="{{ asset($new->main_image) }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="services-two_content">
                                <span style="color: gray; margin-bottom: 8px; font-size: 13px;">{{ $new->created_at->format('d, F Y') }}</span>
                                <h3 class="services-two_title">
                                    <a href="{{ route('news.details', $new->id) }}">
                                        {{ app()->getLocale() == 'ar' ? $new->title_ar : $new->title_en }}
                                    </a>
                                </h3>
                                <div class="services-two_bottom">
                                    <a href="{{ route('news.details', $new->id) }}" class="services-one_btn d-flex">
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

            <div class="d-flex justify-content-center mt-5" style="margin-bottom: 100px;">
                <a href="{{ route('news.index.front') }}" class="main-btn bg-brown mb-3">{{ trans('site.all-news') }}</a>
            </div>

        </div>
    </div>

{{-- aya modal --}}

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
    $(document).ready(function() {
        $('.btn-certificate').on('click',function(e){
            e.preventDefault();
            $(this).find('.minus').toggleClass('active');
        })
    })

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
