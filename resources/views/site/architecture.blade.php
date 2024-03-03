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
        <form class="careerForm">
            <div class="container">
            <div class="section-title">
                <h2 class="fs-2">{{ app()->getLocale() == 'ar' ? 'بيانات فورم التصميم المعمارى' : 'Architectural model data' }}</h2>
            </div>
                <div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="information-cv d-flex justify-content-center align-items-center flex-column">
                        <section class="uploaded-area"></section>
                        <div class="row form-contact mt-5">
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="text" class="w-100 p-3" placeholder=" {{ trans('site.name') }}"
                                       required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="email" class="w-100 p-3"
                                       placeholder=" {{ trans('site.adjective') }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="email" class="w-100 p-3"
                                       placeholder=" {{ trans('site.email') }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="text" class="w-100 p-3"
                                       placeholder=" {{ trans('site.phone') }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="email" class="w-100 p-3"
                                       placeholder=" {{ trans('site.loca') }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="email" class="w-100 p-3"
                                       placeholder=" {{ trans('site.cate') }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="email" class="w-100 p-3"
                                       placeholder=" {{ trans('site.space') }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="number" class="w-100 p-3"
                                       placeholder=" {{ trans('site.dimensions') }}" required>
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
    </script>
@endsection
