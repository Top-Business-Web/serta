<!-- Header Top Area -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-xs-12">
                <div class="contact-info">
                    <i class="fas fa-location-dot me-1 ms-2"></i> {{ app()->getLocale() == 'ar' ? $setting->address_ar : $setting->address_en }}
                    <i class="fas fa-envelope me-1 ms-2"></i> {{ $setting->email }}
                    <i class="fas fa-phone me-1 ms-2"></i> {{ $setting->phone }}
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-xs-12 text-end">
                <div class="header_top_right">
                    <!-- <div class="social-area">
                        <a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    </div> -->
                    <div class="quick_link">
                        <ul>
                            <li><a href="{{ route('faqs') }}">{{ trans('site.faqs') }}</a></li>
                        </ul>
                    </div>
                    <div class="lang-list">
                        <div class="dropdown">

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="btn btn-sm dropdown-toggle" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Area -->

<div class="header-area">
    <div class="sticky-area">
        <div class="navigation">
            <div class="container-fluid">
                <div class="header-inner-box">
                    <div class="logo">
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset($setting->logo) }}" alt=""/></a>
                    </div>

                    <div class="main-menu">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-center"
                                 id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{ route('home') }}">{{ trans('site.home') }}
                                            <span class="sub-nav-toggler"> </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}">{{ trans('site.about_us') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('service') }}">{{ trans('site.services') }}
                                            <span class="sub-nav-toggler"> </span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('product') }}">{{ trans('site.projects') }}
                                            <!-- <span class="sub-nav-toggler"> </span> -->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('teamWork') }}">{{ trans('site.team_work') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('partnerSuccess') }}">{{ trans('site.partner_success') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('blog') }}">{{ trans('site.jobs') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">{{ trans('site.contact') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="header-btn">
                        <a href="{{ route('quote') }}" class="main-btn primary">{{ trans('site.get_a_quote') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
