@extends('site.layouts.master')
@section('content')

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg" style="background-image: url('{{ asset($bgImages->career_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.join_us') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.join_us') }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-career gray-bg section-padding">
        <form class="careerForm" id="careerForm">
            @csrf
            <div class="container">
                <div class="section-title text-center">
                    <img src="{{ asset('assets/front') }}/assets/img/career.png" style="width: 50px;">
                    <h6>{{ trans('site.join_us') }}</h6>
                    <h2 style="margin: 0; font-size: 40px;">{{ trans('site.we_wish') }}!</h2>
                    <p>
                    </p>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="information-cv d-flex justify-content-center align-items-center flex-column">

                        <input type="file" class="dropify drag-file" name="file">
                        <section class="uploaded-area"></section>
                        <div class="row form-contact mt-5">
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="text" class="w-100 p-3" name="name" placeholder=" {{ trans('site.name') }}"
                                       required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="email" class="w-100 p-3" name="email"
                                       placeholder=" {{ trans('site.email') }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="text" class="w-100 p-3" name="phone"
                                       placeholder=" {{ trans('site.phone') }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="number" class="w-100 p-3" name="salary"
                                       placeholder=" {{ trans('site.salary') }}" required>
                            </div>
                            <div class="col-12 mt-2 d-flex justify-content-center">
                                <button type="submit" class="main-btn primary mt-2" id="career-btn"
                                        style="border-radius: 10px;">{{ trans('site.send') }}
                                </button>
                            </div>
                            <div class="col-12">
                                <div class="contact-result load-contact">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('.dropify').dropify();
        });

        $('#career-btn').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById("careerForm"));
            $.ajax({
                'method': 'post',
                'type': 'POST',
                'data': formData,
                '_token': "{{ csrf_token() }}",
                'url': "{{ route('career.store') }}",
                beforeSend: function (formData) {
                    $('#career-btn').html('Loading ... ');
                },
                success: function (data) {
                    if (data.status === 200) {
                        toastr.success('سنتواصل معاك في اسرع وقت');
                        $('#career-btn').html('سنتواصل معاك في اسرع وقت');
                        $('#contactForm input').val('');
                        $('#career-btn').prop('disabled', true);
                        setTimeout(function () {
                            window.location.href = '{{ route('career') }}';
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
                        $('#career-btn').html('error');
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

