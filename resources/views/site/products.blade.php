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
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / <a
                                href="">{{ app()->getLocale() == 'ar' ? $category->title_ar : $category->title_en }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="project-area gray-bg section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="projects-filter">
                        <ul class="list-inline mb-0">
                            <li>
                                <a class="active-filter filter-a" href="">{{ trans('site.all') }}</a>
                            </li>
                            @php
                                $selectedSubCategory = Request::segment(3);
                            @endphp

                            @foreach ($sub_categories as $sub_category)
                                <li>
                                    <a href="" data-filter="{{ $sub_category->id }}" class="filter-a" id="filter_project">
                                        {{ app()->getLocale() == 'ar' ? $sub_category->title_ar : $sub_category->title_en }}
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
                        @foreach ($products as $product)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="project-single">
                                    <div class="project-img">
                                        <a href="{{ route('singleProduct', $product->id) }}" class="w-100">
                                            <img src="{{ asset($product->images[0]) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="project-content">
                                        <div class="project-title text-center">
                                            <a href="{{ route('singleProduct', $product->id) }}"
                                                class="fs-5">{{ trans_model($product, 'title') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- <div class="col-12 col-lg-4">
                            <div class="sidebar">
                                <div class="sidebar_single sidebar_search">
                                    <form action="#" class="sidebar_search-form">
                                        <input type="search" class="searchInput" placeholder="{{ trans('site.search here') }}" name="search">
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget-categories" style="padding: 30px;">
                                <div class="widget-title">
                                    <h5>{{ trans('site.categories') }}</h5>
                                </div>
                                <div class="widget-content">
                                    <ul class="list-unstyled">
                                        <li class="CategorySort">
                                            <a class="CategorySort" data-id="all" href="#">{{ trans('site.all') }}</a>
                                        </li>
                                        @foreach ($categories as $category)
    <li data-bs-toggle="collapse" href="#collapseExample{{ $category->id }}"
                                                role="button"
                                                aria-expanded="false" aria-controls="collapseExample">
                                                <div>
                                                    <a href="#">{{ trans_model($category, 'title') }}</a>
                                                    <span>{{ $category->sub_category_count }}</span>
                                                </div>
                                            </li>
                                            <div class="widget-content">
                                                <ul class="list-unstyled collapse category-sort" data-id="{{ $category->id }}"
                                                    id="collapseExample{{ $category->id }}">
                                                    @foreach ($category->subCategory as $subcategory)
    <li>
                                    <a class="CategorySort" data-id="{{ $subcategory->id }}" href="#">{{ trans_model($subcategory, 'title') }}</a>
        {{--                                                    <span></span> --}}
                                </li>
    @endforeach
                            </ul>
                        </div>
    @endforeach
                        </ul>
                    </div>

                </div>

                <hr>
                <div class="sidebar_single sidebar_post" style="padding: 30px; margin-bottom: 30px;">
                    <h3 class="sidebar_title mb-3" style="margin-left: 0;">{{ trans('site.latest_projects') }}</h3>
                                <ul class="sidebar_post-list list-unstyled">
                                    <?php $products = \App\Models\Product::latest()
                                        ->take(4)
                                        ->get(); ?>
                        @foreach ($products as $product)
    <li style="padding: 0; margin-bottom: 15px;">
                                <div class="sidebar_post-image">
                                    <img src="{{ asset($product->images[0]) }}" alt="">
                                            </div>
                                            <div class="sidebar_post-content">
                                                <h3>
                                                    <a href="{{ route('singleProduct', $product->id) }}">{{ $product->title_ar }}</a>
                                                </h3>
                                            </div>
                                        </li>
    @endforeach
                        </ul>
                    </div> -->

            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        {{-- $('.searchInput').on('keyup', function () { --}}
        {{--    var value = $(this).val(); --}}

        {{--    $.ajax({ --}}
        {{--        type: 'get', --}}
        {{--        url: '{{ route('product-search') }}', --}}
        {{--        data: { --}}
        {{--            'search': value --}}
        {{--        }, --}}
        {{--        beforeSend: function (data) { --}}
        {{--            $('.productSearch').html('loading...'); --}}
        {{--        }, --}}
        {{--        success: function (data) { --}}
        {{--            $('.productSearch').html(data); --}}
        {{--        }, --}}
        {{--        error: function (data) { --}}
        {{--            $('.productSearch').html('<h2 class="error">{{ app()->getLocale() == 'ar' ? 'لا يوجد منتجات' : 'NO PRODUCT FOUND' }}</h2>'); --}}
        {{--        } --}}
        {{--    }); --}}
        {{-- }); --}}


        $('.CategorySort').on('click', function() {
            var value = $(this).data('id');

            $.ajax({
                type: 'get',
                url: '{{ route('productSort') }}',
                data: {
                    'categoryId': value
                },
                beforeSend: function(data) {
                    $('.productSearch').html('loading...');
                },
                success: function(data) {
                    $('.productSearch').html(data);
                },
                error: function(data) {
                    $('.productSearch').html(
                        '<h2 class="error">{{ app()->getLocale() == 'ar' ? 'لا يوجد منتجات' : 'NO PROJECTS FOUND' }}</h2>'
                    );
                }
            });
        });


        $(document).ready(function() {
            $('.filter-a').on('click', function(event) {
                event.preventDefault();
                $('.filter-a').removeClass('active-filter');
                $(this).addClass('active-filter');

                var categoryId = $(this).data('filter');

                $.ajax({
                    url: '{{ route('product-search') }}',
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
