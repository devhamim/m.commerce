<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/product/{slug}/', [FrontendController::class, 'product_details'])->name('product.details');
Route::get('/getProductDetails', [FrontendController::class, 'getProductDetails'])->name('getProductDetails');
Route::post('/getsize', [FrontendController::class, 'getsize'])->name('getsize');
Route::get('/category/{category}', [FrontendController::class, 'category_show'])->name('category.show');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');

Route::post('/cart/store', [CartController::class, 'cart_store'])->name('cart.store');
Route::get('/clear-cart', [CartController::class, 'clear_cart']);

Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/order/store', [CheckoutController::class, 'order_store'])->name('order.store');
Route::get('/order/success', [CheckoutController::class, 'order_success'])->name('order.success');

Route::get('/getProductSizes', [FrontendController::class, 'getProductSizes'] )->name('getProductSizes');

// multipal print

Route::post('/multi/view/invoice', [PrintController::class, 'multi_view_invoice'])->name('multi.view.invoice');

// login
Route::group(['prefix' => 'admin'], function(){
    // login route
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');


    Route::resource('users', UserController::class);
    Route::resource('categorys', CategoryController::class);
    Route::resource('subcategorys', SubcategoryController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('product', ProductController::class);
    Route::resource('inventory', InventoryController::class);
    Route::resource('attribute', AttributeController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('sms', SMSController::class);
    Route::resource('review', ReviewController::class);

    Route::get('size/list', [AttributeController::class, 'size_list'])->name('size.list');
    Route::post('/getsubcategory', [ProductController::class, 'getsubcategory']);
    Route::post('/getinventorydata', [ProductController::class, 'getinventorydata']);
    Route::post('/order/status/update', [OrderController::class, 'order_status_update'])->name('order.status.update');
    Route::get('/invoice/download/{id}', [OrderController::class, 'invoice_download'])->name('invoice.download');

});

Route::post('/getProduct', [OrderController::class, 'getProduct'])->name('getProduct');

