@extends('site.layouts.master')

@section('content')



<!-- Breadcroumb Area  hi-->

<div class="breadcroumb-area blog-bg" style="background-image: url('{{ asset($bgImages->news_img) }}')">
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcroumb-title text-center">
                    <h1>{{ trans('site.jobs') }}</h1>
                    <h6><a href="index.blade.php">{{ trans('site.home') }}</a> / {{ trans('site.jobs') }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Section-->
<div class="blog-area section-padding">
    <div class="container">
        <div class="row">
            @foreach ($data['blogs'] as $blog)
            <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay=".2s">
                <div class="single-blog-item">
                    <div class="blog-bg">
                        <a href="{{ route('career') }}" class="w-100">
                            <img src="{{ asset('assets/admin/posts/images/'.$blog->image) }}" alt="">
                        </a>
                        <?php
                        $created_at = $blog->created_at;
                        $month_shortcut = date("M", strtotime($created_at));
                        ?>

                        <span class="blog-date">{{ $month_shortcut }} {{ $blog->created_at->format('d Y') }}</span>
                    </div>
                    <div class="blog-content">
                        <h5><a href="{{ route('career') }}">{{ app()->getLocale() == 'ar' ? $blog->title_ar : $blog->title_en }}</a></h5>
                        <p>
                            <a class="collapseBtn" data-toggle="collapse" data-target="#collapseExample-{{ $blog->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{ trans('site.read_more') }}
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample-{{ $blog->id }}">
                            <div class="text-black-50 lh-lg">
                                {{ app()->getLocale() == 'ar' ? $blog->desc_ar : $blog->desc_en }}
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
