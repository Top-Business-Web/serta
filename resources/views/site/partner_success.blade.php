@extends('site.layouts.master')

@section('content')



    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg" style="background-image: url('{{ asset($bgImages->about_img) }}')">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>{{ trans('site.partner_success') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.partner_success') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- paretner -->
    <div class="partner-area section-padding">
        <div class="container">
    <div class="section-title">
        <h6>شركاء النجاح</h6>
        <h2>نقدم خدمات متميزة وفريدة من نوعها في مجال الانشاءات باستخدام التقنيات المتقدمة</h2>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
            <div class="card-image">
                <img src="{{ asset('assets/front') }}/assets/img/icon/ecology.png" class="img-partner">
            </div>
        </div>
    </div>
</div>
</div>



    <script>
        function profDownload(){
            var link =  window.open('{{ asset($setting->profile) }}', '_blank');
        }
    </script>
@endsection


