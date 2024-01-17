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

    #### Post ####
    Route::resource('post','PostController');

    #### Product ####
    Route::resource('product','ProductController');

    #### Career ####
    Route::resource('careers','CareerController');

    #### Category ####
    Route::resource('categories','CategoryController');

    #### SubCategory ####
    Route::resource('subcategories','SubCategoryController');

    #### Service ####
    Route::resource('services', 'ServiceController');

    #### Slider ####
    Route::resource('sliders','SliderController');

    #### Contact ####
    Route::resource('contact','ContactController')->except('store');

    #### Faqs ####
    Route::resource('faqs','FaqController');

    #### BackGround Image ####
    Route::resource('background_image','BgImageController');

    #### News letter  ####
    Route::resource('news_letter','NewsLetterController');

    #### Quote ####
    Route::resource('quotes','QuoteController');

    #### Setting ####
    Route::resource('settings','SettingController');

    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');

});










