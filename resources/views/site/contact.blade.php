@extends('site.layouts.master')

@section('content')



    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg" style="background-image: url('{{ asset($bgImages->contact_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.contact') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.contact') }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Contact Page Google Map Start-->
    <div class="contact-page-google-map">
        <div class="container">
            <iframe
                src="{{ $setting->location_url }}"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
<style>
    .blackColor {
        color: black !important;
    }
</style>
    <!--Contact Page Details Start-->
    <section class="contact-page-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="section-title text-center">
                        <h6>{{ trans('site.contact_with_us') }}</h6>
                        <h2 class="section-title">{{ trans('site.drop_us_a_message') }}</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-page_form">
                                <form class="contactForm" id="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input class="blackColor" type="text" placeholder="{{ trans('site.name') }}" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input class="blackColor" type="email" placeholder="{{ trans('site.email') }}"
                                                       name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input class="blackColor" type="text" placeholder="{{ trans('site.phone') }}" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input class="blackColor" type="text" placeholder="{{ trans('site.subject') }}"
                                                       name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form_input-box">
                                                <textarea class="blackColor" name="message"
                                                          placeholder="{{ trans('site.write_a_message') }}"></textarea>
                                            </div>
                                            <button type="button" id="career-btn"
                                                    class="main-btn comment-form_btn">{{ trans('site.send_a_message') }}
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <div class="contact-result load-contact">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page-details_right">
                        <ul class="list-unstyled contact-page-details_list">
                            <li>
                                <span>{{ trans('site.call_anytime') }}</span>
                                <p><a href="tel:13077760608">{{ $setting->phone }}</a></p>
                            </li>
                            <li>
                                <span>{{ trans('site.send_email') }}</span>
                                <p><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                            </li>
                            <li>
                                <span>{{ trans('site.visit_office') }}</span>
                                <p>{{ trans('site.egypt') }}</p>
                            </li>
                        </ul>
                        <div class="contact-page-details_social">
                            <a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $setting->facebook }}"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page Details End-->

    <script>
        $('#career-btn').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById("contactForm"));
            $.ajax({
                'method': 'post',
                'type': 'POST',
                'data': formData,
                '_token': "{{ csrf_token() }}",
                'url': "{{ route('contact.store') }}",
                beforeSend: function (formData) {
                    $('#career-btn').html('Loading ... ');
                },
                success: function (data) {
                    if (data.status === 200) {
                        toastr.success('سنتواصل معك في اقرب وقت');
                        // $('#contactForm input').val('');
                        $('#career-btn').html('سنتواصل معك في اقرب وقت');
                        $('#career-btn').prop('disabled', true);
                        setTimeout(function () {
                            window.location.reload();
                        },2000)
                    }
                },
                error: function (data) {
                    if (data.status === 500) {
                        toastr.error('error sending message !!');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            // alert(value);
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error('' + value);
                                    // alert(value);
                                });
                            }
                        });
                        $('#career-btn').html('خطأ');
                        setTimeout(function () {
                            $('#career-btn').html('{{ trans('site.send_a_message') }}');
                        },2000)
                    }
                }
                ,
                cache: false,
                processData: false,
                contentType: false
            })
        })
    </script>

@endsection

