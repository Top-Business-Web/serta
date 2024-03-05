@extends('site.layouts.master')

@section('content')
    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area faq-bg" style="background-image: url('{{ asset($bgImages->architecture_img) }}')">
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

    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <h2>{{ app()->getLocale() == 'ar' ? $aboutArch->title_ar : $aboutArch->title_en }}</h2>
                        </div>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="about-content-left">
                                        <p class="highlight mb-5">
                                            {{ app()->getLocale() == 'ar' ? $aboutArch->description_ar : $aboutArch->description_en }}
                                        </p>
                                        {{-- <button class="main-btn bg-brown mb-3">
                                            <a href="{{ route('pdf') }}">{{ trans('site.design_profile') }}</a>
                                        </button> --}}
                                        <button class="main-btn bg-brown mb-3"
                                            onclick="profDownload('{{ asset($aboutArch->pdf) }}', 'Design Profile')">{{ trans('site.design_profile') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset($aboutArch->image) }}" alt="">
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
                            @foreach ($categoryArchs as $categoryArch)
                                <li>
                                    <a href="" data-filter="{{ $categoryArch->id }}" class="filter-a"
                                        id="filter_project">
                                        {{ app()->getLocale() == 'ar' ? $categoryArch->title_ar : $categoryArch->title_en }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="row productSearch">
                        @foreach ($architectures as $architecture)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="project-single">
                                    <div class="project-img">
                                        <a href="{{ route('architecture.details', $architecture->id) }}" class="w-100">
                                            <img src="{{ asset($architecture->images[0]) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-title text-center">
                                            <a href=""
                                                class="fs-5">{{ app()->getLocale() == 'ar' ? $architecture->title_ar : $architecture->title_en }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="section-career mb-5 pb-5">
                <form class="careerForm" id="careerForm">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-12">
                            <div class="section-title d-flex justify-content-between">
                            <h2 class="fs-2">
                                {{ app()->getLocale() == 'ar' ? 'بيانات فورم التصميم المعمارى' : 'Architectural model data' }}
                            </h2>
                        </div>
                            </div>
                            <div class="col-md-6 col-12 d-flex justify-content-end align-items-center">
                            <div>
                            <button type="button" class="main-btn bg-brown" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            {{ trans('site.guide') }}
                            </button>
                            </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-5">
                            <div class="information-cv d-flex justify-content-center align-items-center flex-column">
                                <section class="uploaded-area"></section>
                                <div class="row form-contact mt-5">
                                    <div class="col-md-6 col-sm-12 mb-4">
                                        <input type="text" class="w-100 p-3" placeholder=" {{ trans('site.name') }}"
                                            required name="name">
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-4">
                                        <input type="text" class="w-100 p-3"
                                            placeholder=" {{ trans('site.adjective') }}" name="adjective" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-4">
                                        <input type="email" class="w-100 p-3" placeholder="{{ trans('site.email') }}"
                                            name="email" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-4">
                                        <input type="text" class="w-100 p-3" placeholder="{{ trans('site.phone') }}"
                                            name="phone" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-4">
                                        <input type="text" class="w-100 p-3" name="location"
                                            placeholder=" {{ trans('site.loca') }}" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-4">
                                        <input type="text" class="w-100 p-3" name="category"
                                            placeholder=" {{ trans('site.cate') }}" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-4">
                                        <input type="text" class="w-100 p-3" name="space"
                                            placeholder=" {{ trans('site.space') }}" required>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-4">
                                        <input type="text" class="w-100 p-3" name="dimensions"
                                            placeholder=" {{ trans('site.dimensions') }}" required>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="text" class="w-100 p-3" name="subject"
                                            placeholder=" {{ trans('site.subject') }}" required>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <textarea name="message" placeholder="{{ trans('site.write_a_message') }}"></textarea>
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


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ trans('site.guide_title') }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="{{ asset('assets/front/') }}/assets/img/1.png">
      </div>
    </div>
  </div>
</div>

            <!--content -->

            <script type="text/javascript">
                $(document).ready(function() {
                    $('.filter-a').on('click', function(event) {
                        event.preventDefault();
                        $('.filter-a').removeClass('active-filter');
                        $(this).addClass('active-filter');

                        var categoryId = $(this).data('filter');

                        $.ajax({
                            url: '{{ route('architecture-search') }}',
                            method: 'GET',
                            data: {
                                categoryId: categoryId
                            },
                            beforeSend: function(data) {
                                $('.productSearch').html('loading...');
                            },
                            success: function(data) {
                                $('.productSearch').html(data);
                            },
                            error: function(data) {
                                $('.productSearch').html(
                                    '<h2 class="error">{{ app()->getLocale() == 'ar' ? 'لا يوجد مشاريع' : 'NO PROJECTS FOUND' }}</h2>'
                                );
                            }
                        });
                    });
                });

                function profDownload() {
                    var link = window.open('{{ asset($aboutArch->pdf) }}', '_blank');
                    link.download = 'profile Company.pdf'
                }

                $('#career-btn').on('click', function(e) {
                    e.preventDefault();
                    var formData = new FormData(document.getElementById("careerForm"));
                    $.ajax({
                        'method': 'post',
                        'type': 'POST',
                        'data': formData,
                        '_token': "{{ csrf_token() }}",
                        'url': "{{ route('architecture.store.request') }}",
                        beforeSend: function(formData) {
                            $('#career-btn').html('Loading ... ');
                        },
                        success: function(data) {
                            if (data.status === 200) {
                                toastr.success('سنتواصل معك في اقرب وقت');
                                $('#quoteForm input').val('');
                                $('#career-btn').html('سنتواصل معك في اقرب وقت');
                                $('.divSuccess').removeClass('d-none').html('سنتواصل معك في اقرب وقت')
                                $('#career-btn').prop('disabled', true);
                                setTimeout(function() {
                                    window.location.href = '{{ route('architecture.index.front') }}';
                                }, 3000)
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
                                $('#career-btn').html('error');
                            }
                        },
                        cache: false,
                        processData: false,
                        contentType: false
                    })
                })
            </script>
        @endsection
