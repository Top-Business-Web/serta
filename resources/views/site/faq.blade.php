@extends('site.layouts.master')

@section('content')
  

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area faq-bg" style="background-image: url('{{ asset($bgImages->faqs_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.faq') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.faq') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FAQ Section -->

    <div class="faq-section section-padding pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="section-title">
                        <h6>{{ trans('site.if_you_dont_know_find_out') }}</h6>
                        <h2>{{ trans('site.frequently_asked_question') }}</h2>
                    </div>
                    <div class="accordion faqs" id="accordionFaq">
                        @foreach($data['faqs'] as $faq)
                            <div class="card">
                                <div class="card-header" id="heading{{ $faq->id }}">
                                    <h5 class="mb-0 subtitle">
                                        <button class="btn btn-link collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse-{{ $faq->id }}" aria-expanded="false"
                                                aria-controls="collapse">
                                            {{ app()->getLocale() == 'ar' ? $faq->question_ar : $faq->question }}
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse-{{$faq->id}}" class="collapse" aria-labelledby="heading{{ $faq->id }}"
                                     data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <div class="content">
                                            <p> {{ app()->getLocale() == 'ar' ? $faq->answer_ar : $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


