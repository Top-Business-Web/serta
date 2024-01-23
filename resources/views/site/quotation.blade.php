@extends('site.layouts.master')

@section('content')

    <!-- Pre-Loader -->
    <div class="preloader"></div>

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area pickup-bg" style="background-image: url('{{ asset($bgImages->qoute_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.request_a_quote') }}</h1>
                        <h6><a href="index.blade.php">{{ trans('site.home') }}</a> / {{ trans('site.request_a_quote') }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quotation Section -->
    <div class="quotation-section gray-bg section-padding">
        <div class="container">
            <div class="quotation-wrapper">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8">
                        <h2>{{ trans('site.are_you_interested_in_a_quotation') }}</h2>
                        <p class="mb-50">{{ trans('site.please_fill') }}</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="quotation-box">
                            <div class="form_heading">
                                <h5>{{ trans('site.contact_information') }}</h5>
                                <p>{{ trans('site.this_information') }}</p>
                            </div>
                            <div class="alert alert-success d-none divSuccess"></div>
                            <form class="quoteForm" id="quoteForm">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 mb-20">
                                        <div class="quotation-item">
                                            <input type="text" class="form-control" name="first_name"
                                                   placeholder="{{ trans('site.first_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-20">
                                        <div class="quotation-item">
                                            <input type="text" class="form-control" name="last_name"
                                                   placeholder="{{ trans('site.last_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-20">
                                        <div class="quotation-item">
                                            <input type="email" class="form-control" name="email"
                                                   placeholder="{{ trans('site.email') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-20">
                                        <div class="quotation-item">
                                            <input type="tel" class="form-control" name="phone"
                                                   placeholder="{{ trans('site.phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-20">
                                        <div class="quotation-item">
                                            <input type="text" class="form-control" name="company"
                                                   placeholder="{{ trans('site.company_name_if_applicable') }}">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" id="quote-btn" class="main-btn primary">{{ trans('site.submit') }}</button>
                                <div class="col-12">
                                    <div class="contact-result load-contact">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script>
        $('#quote-btn').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById("quoteForm"));
            $.ajax({
                'method': 'post',
                'type': 'POST',
                'data': formData,
                '_token': "{{ csrf_token() }}",
                'url': "{{ route('quote.store') }}",
                beforeSend: function (formData) {
                    $('#quote-btn').html('Loading ... ');
                },
                success: function (data) {
                    if (data.status === 200) {
                        toastr.success('سنتواصل معك في اقرب وقت');
                        $('#quoteForm input').val('');
                        $('#quote-btn').html('سنتواصل معك في اقرب وقت');
                        $('.divSuccess').removeClass('d-none').html('سنتواصل معك في اقرب وقت')
                        $('#quote-btn').prop('disabled', true);
                        setTimeout(function () {
                            window.location.href = '{{ route('quote') }}';
                        },3000)
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
                        $('#quote-btn').html('error');
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


