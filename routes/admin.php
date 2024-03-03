<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/', function () {
        return view('admin/index');
    })->name('adminHome');

    #### Admins ####
    Route::resource('admins','AdminController');
    Route::POST('delete_admin','AdminController@delete')->name('delete_admin');
    Route::get('my_profile','AdminController@myProfile')->name('myProfile');

    #### About Us ####
    Route::resource('about_us','AboutUsController');

    #### About Arch ####
    Route::resource('about_archs','AboutArchController');

    #### Post ####
    Route::resource('post','PostController');

    #### Post ####
    Route::resource('news','NewsController');

    #### Product ####
    Route::resource('product','ProductController');
    
    #### Architecture ####
    Route::resource('architecture','ArchitectureController');

    #### Career ####
    Route::resource('careers','CareerController');

    #### Arch Request ####
    Route::resource('arch_requests','ArchController');

    #### Category ####
    Route::resource('categories','CategoryController');

    #### Category Arch ####
    Route::resource('categories_arch','CategoryArchController');

    #### SubCategory ####
    Route::resource('subcategories','SubCategoryController');

    #### Service ####
    Route::resource('services', 'ServiceController');

    #### Slider ####
    Route::resource('sliders','SliderController');

    #### Benefits ####
    Route::resource('benefits','BenefitsController');

    #### Partner Success ####
    Route::resource('partners_success','PartnerSuccessController');

    #### Contact ####
    Route::resource('contact','ContactController')->except('store');

    #### Faqs ####
    Route::resource('faqs','FaqController');

    #### BackGround Image ####
    Route::resource('background_image','BgImageController');

    #### News letter  ####
    Route::resource('news_letter','NewsLetterController');

    #### Certificates ####
    Route::resource('certificates','CertificateController');

    #### Quote ####
    Route::resource('quotes','QuoteController');

    #### Setting ####
    Route::resource('settings','SettingController');

    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');

});










