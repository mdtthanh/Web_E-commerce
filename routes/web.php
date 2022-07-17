<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::prefix('user')->group(function (){
    Route::get('/shop/{id}',[UserController::class, 'getShop'])->name('shop');
    Route::get('/shop', function(){
        return redirect(route('shop', ['id' => '1']));
    });
    Route::get('/shop-cart',[UserController::class, 'getShopCart'])->name('shopcart');
    Route::get('/product-details/{id}',[UserController::class, 'getProductDetail'])->name('productdetail');
    Route::get('/check-out',[UserController::class, 'getCheckOut'])->name('checkout');
    Route::get('/add-cart/{id}', [UserController::class, 'getAddCart'])->name('addcart');
    Route::get('/delete-item/{id}', [UserController::class, 'getDeleteItem'])->name('deleteitem');
    Route::post('/save-all', [UserController::class, 'postSaveAllItem']);
    Route::post('/order', [UserController::class, 'postOrder'])->name('order');
    Route::get('/category-{id}/{page}', [UserController::class, 'getShopByCategory'])->name('shopcategory');
});

#-----------------admin---------------
Route::post('/login_dashboard',  [App\Http\Controllers\AdminController::class,'index'])->name('login_dashboard');

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',  [App\Http\Controllers\AdminController::class,'show_dashboard'])->name('dashboard');
    Route::get('/admin_users',  [App\Http\Controllers\AdminController::class,'admin_users'])->name('admin_users');
    Route::get('/admin_create-users',  [App\Http\Controllers\AdminController::class,'admin_create_users'])->name('admin_create-users');
    Route::post('/save_users',  [App\Http\Controllers\AdminController::class,'save_users'])->name('save_users');
    Route::get('/admin_delete-users/{user_id}',  [App\Http\Controllers\AdminController::class,'admin_delete_users'])->name('admin_delete-users');
    Route::get('/admin_edit-users/{user_id}',  [App\Http\Controllers\AdminController::class,'admin_edit_users'])->name('admin_edit-users');
    Route::post('/admin_update_users/{user_id}',  [App\Http\Controllers\AdminController::class,'admin_update_users'])->name('admin_update-users');




    #------------------------------category---------------------------------
   #-----------------------------------------------------------------------
    Route::get('/admin_category',  [App\Http\Controllers\AdminController::class,'admin_category'])->name('admin_category');
    Route::get('/admin_create-category',  [App\Http\Controllers\AdminController::class,'admin_createCategory'])->name('admin_create-category');
    Route::get('/admin_edit-category/{category_id}',  [App\Http\Controllers\AdminController::class,'admin_edit_category'])->name('admin_edit-category');
    Route::post('/admin_update-category/{category_id}',  [App\Http\Controllers\AdminController::class,'admin_update_category'])->name('admin_update-category');
    Route::get('/admin_delete-category/{category_id}',  [App\Http\Controllers\AdminController::class,'admin_delete_category'])->name('admin_delete-category');
    Route::post('/save_category',  [App\Http\Controllers\AdminController::class,'save_category'])->name('save_category');

   #-----------------------------------------------------------------------
   #-----------------------------------------------------------------------

    #------------------------------Product-----------------------------------------
    #-----------------------------------------------------------------------

    Route::get('/admin_product-list',  [App\Http\Controllers\AdminController::class,'admin_product'])->name('admin_product-list');
    Route::get('/admin_create-product',  [App\Http\Controllers\AdminController::class,'admin_create_product'])->name('admin_create-product');
    Route::get('/admin_edit-product/{product_id}',  [App\Http\Controllers\AdminController::class,'admin_edit_product'])->name('admin_edit-product');
    Route::post('/admin_update-product/{product_id}',  [App\Http\Controllers\AdminController::class,'admin_update_product'])->name('admin_update-product');
    Route::get('/admin_delete-product/{product_id}',  [App\Http\Controllers\AdminController::class,'admin_delete_product'])->name('admin_delete-product');
    Route::post('/save_product',  [App\Http\Controllers\AdminController::class,'save_product'])->name('save_product');



    #-----------------------------------------------------------------------
    #-----------------------------------------------------------------------


    Route::get('/admin_orders',  [App\Http\Controllers\AdminController::class,'admin_orders'])->name('admin_orders');
    Route::get('/admin_order-detail/{id}',  [App\Http\Controllers\AdminController::class,'admin_order_detail'])->name('admin_order-detail');

    Route::get('/approved/{id}',  [App\Http\Controllers\AdminController::class,'approved'])->name('approved');
    Route::get('/cancel/{id}',  [App\Http\Controllers\AdminController::class,'cancel'])->name('cancel');


//    Route::get('/admin_delete-product/{product_id}',  [App\Http\Controllers\AdminController::class,'admin_delete_product'])->name('admin_delete-product');
//    Route::post('/save_product',  [App\Http\Controllers\AdminController::class,'save_product'])->name('save_product');



});

Route::get('dashboard', [App\Http\Controllers\CustomAuthController::class, 'dashboard']);
Route::get('login', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [App\Http\Controllers\CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');
