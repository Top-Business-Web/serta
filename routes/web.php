<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\{
    HomeController,
    TeamWorkController,
    PartnerSuccessController,
    AboutController,
    BlogController,
    CareerController,
    ContactController,
    FaqsController,
    ProductController,
    QuoteController,
    ServiceController
};
use App\Http\Controllers\Site\CategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        #### Home ####
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::post('/news/store', [HomeController::class, 'storeNews'])->name('news.store');

        #### About ####
        Route::get('/about', [AboutController::class, 'index'])->name('about');

        #### Blog ####
        Route::get('/blog', [BlogController::class, 'index'])->name('blog');
        Route::get('/blog/{id}', [BlogController::class, 'singleBlog'])->name('singleBlog');

        #### Career ####
        Route::get('/career', [CareerController::class, 'index'])->name('career');
        Route::post('/career/store', [CareerController::class, 'storeCareer'])->name('career.store');

        #### Category ####
        Route::get('/category/{categoryId}', [HomeController::class, 'getSubCategory'])->name('getSubCategory');

        #### Contact ####
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        Route::post('/contact/store', [ContactController::class, 'storeContact'])->name('contact.store');

        #### Faqs ####
        Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs');

        #### Product ####
        Route::get('/product', [ProductController::class, 'index'])->name('product');
        Route::get('/singleProduct/{id}', [ProductController::class, 'singleProduct'])->name('singleProduct');
        Route::get('/productSearch/', [ProductController::class, 'productSearch'])->name('product-search');
        Route::get('/productSort/', [ProductController::class, 'productSort'])->name('productSort');

        #### Quote ####
        Route::get('/quote', [QuoteController::class, 'index'])->name('quote');
        Route::post('/quote/store', [QuoteController::class, 'storeQuote'])->name('quote.store');

        ### Service ####
        Route::get('/service', [ServiceController::class, 'index'])->name('service');
        Route::get('/singleService/{id}', [ServiceController::class, 'singleService'])->name('singleService');

        ### Team Work ####
        Route::get('/team-work', [TeamWorkController::class, 'index'])->name('teamWork');

        ### Partner Success ####
        Route::get('/partner-success', [PartnerSuccessController::class, 'index'])->name('partnerSuccess');
    }
);
