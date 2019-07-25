<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('user.user_master');
});

Route::group(['prefix'=>'user','as'=>'user.'], function(){
    // Route::get('/user_master', 'User_ShopController@user_master')->name('user_master');
    Route::get('/index', function () {
        return view('user.index');
    })->name('index');
    Route::get('/shop', 'User_ShopController@index')->name('shop');
    Route::get('/shop/add/{id}', 'User_ShopController@shop_add_cart')->name('shop_add_cart');
    Route::get('/cart', 'User_ShopController@shop_show_cart')->name('cart');
    Route::get('/cart/count', 'User_ShopController@cart_count')->name('cart_count');
    Route::get('/cart/ordercomplete', 'User_ShopController@cart_ordercomplete')->name('cart_ordercomplete');
    Route::get('/cart/checkout', 'User_ShopController@cart_checkout')->name('cart_checkout');
    Route::post('/cart/db', 'User_ShopController@cart_db')->name('cart_db');
    // Route::post('/cart/db_store', 'User_ShopController@cart_db_store')->name('cart_db_store');
    Route::get('/cart/{id}', 'User_ShopController@shop_delete_cart')->name('shop_delete_cart');
    Route::get('/product_detail/{id}', 'User_ShopController@product_detail')->name('product_detail');
    Route::get('/blog', function () {
        return view('user.blog');
    })->name('blog');
    Route::get('/about', function () {
        return view('user.about');
    })->name('about');
    Route::get('/contact', function () {
        return view('user.contact');
    })->name('contact');
    // Route::get('/cart', function () {
    //     return view('user.cart');
    // })->name('cart');
});


Route::group(['prefix'=>'category','as'=>'category.'], function(){
    Route::get('/', 'ProductCategoryController@index')->name('index');
    Route::get('/create', 'ProductCategoryController@create')->name('create');
    Route::post('/store', 'ProductCategoryController@store')->name('store');
    Route::get('/edit/{id}', 'ProductCategoryController@edit')->name('edit');
    Route::put('/update/{id}', 'ProductCategoryController@update')->name('update');
    Route::delete('/delete/{id}', 'ProductCategoryController@destroy')->name('delete');
});

Route::group(['prefix'=>'product','as'=>'product.'], function(){
    Route::get('/', 'ProductController@index')->name('index');
    Route::get('/show/{id}', 'ProductController@show')->name('show');
    Route::get('/create', 'ProductController@create')->name('create');
    Route::get('/getcategory/{type}', 'ProductController@getcategory')->name('getcategory');
    Route::post('/store', 'ProductController@store')->name('store');
    Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
    Route::put('/update/{id}', 'ProductController@update')->name('update');
    Route::delete('/delete/{id}', 'ProductController@destroy')->name('delete');
    Route::post('/find', 'ProductController@find')->name('find');
    Route::post('/find_show', 'ProductController@find_show')->name('find_show');
    Route::get('/product_cart/{id}', 'ProductController@addItemToCart')->name('addItemToCart');
});