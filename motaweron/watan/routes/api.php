<?php

//use App\Http\Controllers\Api\AgentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\Ad\SoldController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\Ad\EditAdController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Chat\ChatController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\Blogs\BlogController;
use App\Http\Controllers\Api\Home\SliderController;
use App\Http\Controllers\Api\Ad\FavouriteController;
use App\Http\Controllers\Api\Home\PostApiController;
use App\Http\Controllers\Api\Home\ProjectController;
use App\Http\Controllers\Api\Ad\AdLocationController;
use App\Http\Controllers\Api\Home\CategoryController;
use App\Http\Controllers\Api\Auth\CodeCheckController;
use App\Http\Controllers\Api\Packages\PackageController;
use App\Http\Controllers\Api\Auth\AuthorizedPostController;
use App\Http\Controllers\Api\Notifications\NotificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('send-whatsapp-otp', [AuthController::class, 'sendWhatsappOtp']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//====================== Authorized links =========================
Route::group(['namespace'=>'Ads','prefix'=>'ads','middleware'=>'auth_jwt'],function(){
    Route::get('myads',[AuthorizedPostController::class, 'userAds']);
    Route::get('list',[SoldController::class, 'list']);
    Route::post('update_ad_status/{id}',[SoldController::class, 'add_to_sold_ads']);
    Route::post('update_ad/{id}',[EditAdController::class, 'update']);
    Route::post('update_project/{id}',[EditAdController::class, 'update_project']);
});
//================================== auth ============================
Route::group(['namespace' => 'Auth','prefix' => 'auth'],function (){
    Route::post('login',[AuthController::class, 'login']);
    Route::POST('register',[AuthController::class, 'register']);
    Route::post('password/email',  ForgotPasswordController::class);
    Route::post('password/code/check', [CodeCheckController::class]);
    Route::post('password/phone/check', [CodeCheckController::class, 'check_phone']);
    Route::post('password/reset', ResetPasswordController::class);
    Route::POST('update-profile',[AuthController::class, 'update_profile']);
    Route::POST('logout',[AuthController::class, 'logout']);
    Route::POST('delete-account',[AuthController::class, 'deleteAccount']);
    Route::post('insert-token',[NotificationController::class, 'insert_token']);

    Route::get('/me', [AuthController::class,'me']);
    Route::get('social/login/{provider}', [AuthController::class,'redirectToProvider']);
    Route::get('social/login/{provider}/callback', [AuthController::class,'handleProviderCallback']);


});
//================================== Home routes ============================
Route::group(['namespace' => 'Home','prefix' => 'home'],function (){
    Route::get('/sliders', [SliderController::class, 'index']);
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/show-more-posts', [PostApiController::class, 'index']);
    Route::get('/posts', [PostApiController::class, 'home']);
    Route::get('/clients-ads', [PostApiController::class, 'clients_ads']);
    Route::get('/companies-ads', [PostApiController::class, 'companies_ads']);
    Route::get('/projects-ads', [ProjectController::class, 'projects_ads']);
    Route::get('/post_by_id/{id}', [PostApiController::class, 'ad_details']);
    Route::get('view_ad/{id}',[AuthorizedPostController::class, 'view_ad']);
    Route::get('project_by_id/{id}',[ProjectController::class, 'find']);
    Route::get('get-all-locations',[AdLocationController::class, 'index']);
});
//================================== Settings ============================
Route::group(['prefix' => 'general'],function (){
    Route::post('/filter', [PostApiController::class, 'filter']);
    Route::get('/settings', [GeneralController::class, 'setting']);
    Route::get('/cities', [GeneralController::class, 'cities']);
    Route::get('/locations/{area_id}', [GeneralController::class, 'locations']);
    Route::get('/amenities', [GeneralController::class, 'amenities']);
    Route::get('/agents', [GeneralController::class, 'agents']);
    Route::get('/packages', [PackageController::class, 'index']);
});

//================================== contact Us ============================
Route::post('/store-contact-us', [ContactUsController::class, 'store']);

//================================== Blogs routes ============================
Route::group(['namespace' => 'Blogs','prefix' => 'blogs'],function (){
    Route::get('/list', [BlogController::class, 'index']);
});


//====================== Authorized links =========================
Route::group(['namespace'=>'Ads','prefix'=>'ads','middleware'=>'auth_jwt'],function(){
    Route::get('myads',[AuthorizedPostController::class, 'userAds']);
    Route::post('add_ads',[AuthorizedPostController::class, 'add_ad']);
    Route::post('add-project',[ProjectController::class, 'store']);
    Route::delete('delete-project/{id}',[ProjectController::class, 'destroy']);
    Route::post('view_ad/{id}',[AuthorizedPostController::class, 'view_ad']);
    Route::post('make-report',[ReportController::class, 'store']);
    Route::delete('delete-ad/{id}',[AuthorizedPostController::class, 'destroy']);
    Route::post('add-or-remove-post-to-favourite',[FavouriteController::class,'post_favourite']);
    Route::get('favourites-lists',[FavouriteController::class,'get_favourites']);
});
Route::group(['namespace'=>'Ads','prefix'=>'ads'],function(){
    Route::get('ads-by-user/{user_id}',[PostApiController::class, 'ads_by_user']);
});

// Projects routes
Route::group(['prefix'=>'company','middleware'=>'auth_jwt'],function(){
    Route::resource('agent',AgentController::class);
    Route::post('add-or-remove-project-to-favourite',[FavouriteController::class,'project_favourite']);
});

Route::group(['prefix'=>'projects'],function(){
    Route::get('projects-by-user/{user_id}',[ProjectController::class,'projects_by_user']);
    Route::get('agents-by-user/{user_id}',[ProjectController::class,'agents_by_user']);
});

Route::group(['namespace'=>'Chat','prefix'=>'chat','middleware'=>'auth_jwt'],function(){
    Route::get('my_rooms',[ChatController::class, 'myRooms']);
    Route::get('get_room',[ChatController::class, 'getRoom']);
    Route::post('open_room',[ChatController::class, 'storeRoom']);
    Route::post('store_chat',[ChatController::class, 'storeMessage']);
});


Route::group(['prefix'=>'packages','middleware'=>'auth_jwt'],function(){
    Route::post('add_package',[PackageController::class,'store'])->name('storePackage');
    Route::get('endUpdatePackage/{user_id}/{package_id}',[PackageController::class,'endUpdatePackage'])->name('endUpdatePackage');
});
Route::get('endCheckOut', [PackageController::class,'endCheckOut']);

Route::get('notifications', [NotificationController::class,'index']);
