<?php

namespace App\Providers;

use App\Models\About;
use App\Models\BgImage;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('setting',Setting::first());
        View::share('aboutUs',About::first());
        View::share('bgImages',BgImage::first());
        View::share('categories',Category::query()->select('id', 'title_ar', 'title_en')->get());
    }
}
