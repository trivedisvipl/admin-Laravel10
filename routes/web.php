<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MarginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ExhibitionController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\TaxController;
//use App\Http\Controllers\Frontend\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    return 'Successfully clear the cache from system!!'; //Return anything
});

defined('ADMIN_SLUG') or define('ADMIN_SLUG', 'admin');

Route::group(array('prefix' => ADMIN_SLUG), function () {

    Route::get('/', [LoginController::class,'getIndex'])->middleware('guest.admin')->name(ADMIN_SLUG);
    Route::get('logout',[LoginController::class,'doLogout']);
    Route::post('login', [LoginController::class,'doLogin']);


    //after login
    Route::group(array('middleware' => 'auth.admin'), function () {

        Route::get('dashboard',[DashboardController::class,'index'])->name(ADMIN_SLUG . '.dashboard');

        Route::resource('profile',ProfileController::class);

        #Admin password change
        Route::get('password/change', [ProfileController::class,'changePassword'])->name(ADMIN_SLUG . '.password.change');
        Route::post('password/change', [ProfileController::class,'updatePassword'])->name(ADMIN_SLUG . '.password.change');

        Route::resource('setting', SettingController::class);

        //  #Category Management
        // Route::get('category/getCategoryData', [CategoryController::class,'getCategoryData']);
        // Route::post('category/changeStatus', [CategoryController::class,'changeStatus']);
        // Route::resource('category', CategoryController::class);

        // #Margin Management
        // Route::get('margin/getMarginData', [MarginController::class,'getMarginData']);
        // Route::post('margin/changeStatus', [MarginController::class,'changeStatus']);
        // Route::resource('margin', MarginController::class);

        //  #Product Management
        // Route::get('product/getProdductData', [ProductController::class,'getProdductData']);
        // Route::post('product/changeStatus', [ProductController::class,'changeStatus']);
        // Route::post('product/deleteimg', [ProductController::class,'deleteImg']);
        // Route::resource('product',ProductController::class);

        //  #Users Management
        //  Route::get('user/getUserData', [UserController::class,'getUserData']);
        //  Route::post('user/changeStatus', [UserController::class,'changeStatus']);
        //  Route::resource('user',UserController::class);

        //  #Payment Management
        //  Route::get('payment/getPaymentData', [PaymentMethodController::class,'getPaymentData']);
        //  Route::post('payment/changeStatus', [PaymentMethodController::class,'changeStatus']);
        //  Route::resource('payment',PaymentMethodController::class);

        // #Order Management
        // Route::get('order/getOrderData', [OrderController::class,'getOrderData']);
        // //Route::post('payment/changeStatus', [PaymentMethodController::class,'changeStatus']);
        // Route::resource('order',OrderController::class);

        //  #Event Management
        //  Route::get('event/getEventData', [EventController::class,'getEventData']);
        //  //Route::post('payment/changeStatus', [PaymentMethodController::class,'changeStatus']);
        //  Route::resource('event',EventController::class);

        //  #Tax Management
        //  Route::get('tax/getTaxData', [TaxController::class,'getTaxData']);
        //  //Route::post('payment/changeStatus', [PaymentMethodController::class,'changeStatus']);
        //  Route::resource('tax',TaxController::class);

     });
});

 //Route::get('/',[HomeController::class,'index']);


defined('PRODUCT_IMAGE_PATH') or define('PRODUCT_IMAGE_PATH', storage_path('app/public/product/'));
defined('PRODUCT_IMAGE_ROOT') or define('PRODUCT_IMAGE_ROOT', asset('storage/product') . '/');

defined('USER_IMAGE_PATH') or define('USER_IMAGE_PATH', storage_path('app/public/user/'));
defined('USER_IMAGE_ROOT') or define('USER_IMAGE_ROOT', asset('storage/user') . '/');

defined('IMAGE_NOT_FOUND') or define('IMAGE_NOT_FOUND', asset('storage/default.png'));
defined('PROFILE_IMAGE') or define('PROFILE_IMAGE', asset('storage/profile.png'));
