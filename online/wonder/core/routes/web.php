<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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
// $lang = app('lang');
// dd($lang);
//dd

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');

    // Nexmo API credentials
    $apiKey = '7454602f';
    $apiSecret = 'z3NvSfMnuPNe49Ij';
    $fromNumber = 'whatsapp:+201016830875';
    $toNumber = 'whatsapp:+9876543210';
    // Initialize Nexmo client
    $basicCredentials = new Basic($apiKey, $apiSecret);
    $client = new Client($basicCredentials);

    // Compose and send the WhatsApp message
    $response = $client->message()->send([
        'to' => $toNumber,
        'from' => $fromNumber,
        'text' => 'Hello from Nexmo!'
    ]);

    // Handle the response
    if ($response->getStatus() == 0) {
        echo "WhatsApp message sent successfully!";
    } else {
        echo "Error: " . $response->getErrorMessage();
    }


    return response()->json(['message' => 'WhatsApp message sent']);
});

Route::get('/g/{lang}','Site\TourController@clang');

Route::post('lang', 'Site\TourController@lang')->name('lang');

Route::get('currency/{currency}', function ($currency) {
    //    dd(4);
    if (in_array($currency, ['dollar', 'euro'])) {
        session()->has('currency') ? session()->forget('currency') : '';
        session()->put('currency', $currency);
        //        return session()->get('currency');
    } else {
        session()->has('currency') ? session()->forget('currency') : '';
        session()->put('currency', 'dollar');
        //        return session()->get('currency');
    }
    return back();
});
Route::group(['middleware' => ['Currency', 'lang']], function () {

    Route::get('/', 'Site\TourController@index')->name('webHome');

    Route::get('tour/{id}', 'Site\CategoryController@index');

    Route::get('tour-program/{id}', 'Site\CategoryController@tour_program')->name("tour-program");
    Route::get('toursSearch', 'Site\CategoryController@toursSearch')->name("toursSearch");

    Route::get('booking/{id}', 'Site\CategoryController@booking');

    //    Route::post('store_booking', 'Site\PaymentNativeController@store_order')->name('store_booking');
    //    Route::post('store_booking', 'Site\OrderController@store_order')->name('store_booking');
    //    Route::post('store_booking', 'Site\OrderController@store_order')->name('store_booking');

    //    Route::resource('Booking','Site\PaymentNativeController');
    Route::resource('Booking', 'Site\PaymentNativeController');

    Route::get('contact', 'Site\ContactController@contact_index');
    Route::post('store_contact', 'Site\ContactController@store_contact')->name('store_contact');
    Route::post('store_offer', 'Site\ContactController@store_offer')->name('store_offer');


    Route::get('about', 'Site\AboutController@about_index');
    Route::get('blogs', 'Site\BlogController@index')->name('blog.index');
    Route::get('blog/{slug}', 'Site\BlogController@blogDesc')->name('blog');
    Route::get('terms', 'Site\TermsController@terms_index');

    Route::get('parters', 'Site\PartnerController@index');

    Route::post('store_comment', 'Site\CommentController@store_comment')->name('store_comment');
    Route::post('store_replay', 'Site\CommentController@store_replay')->name('store_replay');



    Route::get('PayWithPayPal', function () {
        return view('PayPal');
    })->name('PayWithPayPal');

    Route::get('payment', 'Site\PayPalController@payment')->name('payment');
    Route::get('cancel', 'Site\PayPalController@cancel')->name('payment.cancel');
    Route::get('payment/success', 'Site\PayPalController@success')->name('payment.success');

    //    Route::resource('payment', 'Site\PaymentController');
    Route::resource('payment', 'Site\PayPalController');
    Route::get('PayIndex', 'Site\PayPalController@index');
    Route::get('pay', 'Site\PayPalController@payment');
    //Auth::routes();
    //
    //Route::get('login',function (){
    //    return view('auth/login');
    //})->name('login');

    Route::get('/home', 'HomeController@index')->name('home');


    Route::get('/checkout', 'Site\CheckoutController@index')->name('checkout.index');
    Route::post('/checkout', 'Site\CheckoutController@store')->name('checkout.store');
    Route::post('/paypal-checkout', 'Site\CheckoutController@paypalCheckout')->name('checkout.paypal');

    Route::get('/guestCheckout', 'Site\CheckoutController@index')->name('guestCheckout.index');



    Route::get('Status/{id}', 'Site\PaymentNativeController@status')->name('Status');
    Route::get('Cancel/{id}', 'Site\PaymentNativeController@Cancel')->name('Cancel');


    Route::post('GetRoomsJs', 'Site\CategoryController@GetRoomsJs')->name('GetRoomsJs');


    Route::get('OrderDetails/{id}', 'Site\PaymentNativeController@OrderDetails');
});
