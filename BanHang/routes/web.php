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
    return view('user_master');
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