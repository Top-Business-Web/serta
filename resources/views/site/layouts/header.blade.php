<!-- Header Top Area hi -->
<!-- <div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-xs-12">
                <div class="contact-info">
                    <i class="fas fa-location-dot me-1 ms-2"></i>
                    {{ app()->getLocale() == 'ar' ? $setting->address_ar : $setting->address_en }}
                    <i class="fas fa-envelope me-1 ms-2"></i> {{ $setting->email }}
                    <i class="fas fa-phone me-1 ms-2"></i> {{ $setting->phone }}
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-xs-12 text-end">
                <div class="header_top_right">
                    <div class="social-area">
                        <a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="quick_link">
                        <ul>
                            <li><a href="{{ route('faqs') }}">{{ trans('site.faqs') }}</a></li>
                        </ul>
                    </div>
                    <div class="lang-list">
                        <div class="dropdown">

                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
<a class="btn btn-sm dropdown-toggle" rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
@endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Header Area -->

<div class="header-area">
    <div class="sticky-area">
        <div class="navigation">
            <div class="container-fluid">
                <div class="header-inner-box">
                    <div class="logo">
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset($setting->logo) }}"alt="" /></a>
                    </div>
                    <!-- hi -->
                    <div class="main-menu">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" id="toggle-btn" type="button" data-toggle="collapse"
                                data-target="#toggle-example">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div id="toggle-example" class="collapse in navbar-collapse justify-content-center">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        @php
                                            $name_url = Request::segment(2);
                                        @endphp
                                        <a class="nav-link {{ $name_url == '' ? 'active' : '' }}"
                                            href="{{ route('home') }}">{{ trans('site.home') }}
                                            <span class="sub-nav-toggler"> </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'about' ? 'active' : '' }}"
                                            href="{{ route('about') }}">{{ trans('site.about_us') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'service' ? 'active' : '' }}"
                                            href="{{ route('service') }}">{{ trans('site.services') }}
                                            <span class="sub-nav-toggler"> </span>
                                        </a>
                                    </li>



                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle {{ Route::currentRouteName() == 'getSubCategory' ? 'active' : '' }}"
                                            href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            {{ trans('site.projects') }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach ($categories as $category)
                                                <a class="dropdown-item"
                                                    href="{{ route('getSubCategory', $category->id) }}">{{ app()->getLocale() == 'ar' ? $category->title_ar : $category->title_en }}</a>
                                            @endforeach
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle {{ Route::currentRouteName() == 'architectureIndex' ? 'active' : '' }}"
                                            href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            {{ trans('site.architecture') }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item"
                                                    href="{{ route('architectureIndex') }}">اقسام</a>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'newsIndex' ? 'active' : '' }}"
                                            href="{{ route('newsIndex') }}">{{ trans('site.news') }}</a>
                                    </li>


                                    <!-- <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'team-work' ? 'active' : '' }}" href="{{ route('teamWork') }}">{{ trans('site.team_work') }}</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'partner-success' ? 'active' : '' }}"
                                            href="{{ route('partnerSuccess') }}">{{ trans('site.partner_success') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'blog' ? 'active' : '' }}"
                                            href="{{ route('blog') }}">{{ trans('site.jobs') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ $name_url == 'contact' ? 'active' : '' }}"
                                            href="{{ route('contact') }}">{{ trans('site.contact') }}</a>
                                    </li>
                                    @php
                                        $currentLocale = LaravelLocalization::getCurrentLocale();
                                    @endphp

                                    <li class="nav-item dropdown">
                                        @if ($currentLocale == 'en')
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                English
                                            </a>
                                        @else
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                العربية
                                            </a>
                                        @endif

                                        <div class="dropdown-menu menu-drop" aria-labelledby="navbarDropdown">
                                            @if ($currentLocale == 'ar')
                                                <a class="dropdown-item"
                                                    href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
                                            @else
                                                <a class="dropdown-item"
                                                    href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a>
                                            @endif
                                        </div>
                                    </li>
                                    <!-- <li class="nav-item">
                                        @php
                                            $currentLocale = LaravelLocalization::getCurrentLocale();
                                        @endphp
                                        @if ($currentLocale == 'ar')
<a class="nav-link active" href="#">العربية</a>
@else()
<a class="nav-link active" href="#">English</a>
@endif
                                        <ul class="sub-menu">
                                            <li>
                                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
@if ($localeCode !== $currentLocale)
<a class="btn btn-sm dropdown-toggle" rel="alternate"
                                                            hreflang="{{ $localeCode }}"
                                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
@endif
@endforeach
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- <div class="lang-list">
                        <div class="dropdown">

                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
<a class="btn btn-sm dropdown-toggle" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
@endforeach

                        </div>
                    </div> -->

                    <!-- <div class="header-btn">
                        <a href="{{ route('quote') }}" class="main-btn primary">{{ trans('site.get_a_quote') }}</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
