@extends('site.layouts.master')

@section('content')
    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg" style="background-image: url('{{ asset($bgImages->career_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.partner_success') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.partner_success') }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- paretner -->
    <div class="partner-area section-padding">
        <div class="container">
            <div class="section-title">
                <h6>{{ trans('site.partner_success') }}</h6>
                <h2></h2>
            </div>
            <div class="row">
                @foreach ($partners_success as $partner_success)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card-image">
                            <img src="{{ asset($partner_success->image) }}" class="img-partner">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <script>
        function profDownload() {
            var link = window.open('{{ asset($setting->profile) }}', '_blank');
        }
    </script>
@endsection
