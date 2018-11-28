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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
		Route::get('/','adminController@index');
		//danh mục
		Route::get('danh-muc','categoryController@index')->name('danh-muc');
		Route::get('them-danh-muc','categoryController@add')->name('them-danh-muc');
		Route::post('them-danh-muc','categoryController@create')->name('them-danh-muc');
		Route::get('sua-danh-muc/{id}','categoryController@edit')->name('sua-danh-muc');
		Route::post('sua-danh-muc/{id}','categoryController@update')->name('sua-danh-muc');
		Route::get('xoa-danh-muc/{id}','categoryController@delete')->name('xoa-danh-muc');
		//người dùng
		Route::get('tai-khoan','userController@index')->name('tai-khoan');
		Route::get('them-tai-khoan','userController@add')->name('them-tai-khoan');
		Route::get('sua-tai-khoan/{id}','userController@edit')->name('sua-tai-khoan');
		Route::post('sua-tai-khoan/{id}','userController@edit_post')->name('sua-tai-khoan');
		Route::get('xoa-tai-khoan/{id}','userController@delete')->name('xoa-tai-khoan');
		//sản phẩm
		Route::get('san-pham1','productController@index')->name('san-pham1');
		Route::get('them-san-pham','productController@add')->name('them-san-pham');
		Route::post('them-san-pham','productController@create')->name('them-san-pham');
		Route::get('sua-san-pham/{id}','productController@edit')->name('sua-san-pham');
		Route::post('sua-san-pham/{id}','productController@update')->name('sua-san-pham');
		Route::get('xoa-san-pham/{id}','productController@delete')->name('xoa-san-pham');
		// đặt hàng
		Route::get('dathang','orderController@index')->name('dathang');
		Route::get('chi-tiet-don-hang/{id}','orderController@order_detail')->name('chi-tiet-don-hang');
		Route::get('order-stt/{id}/{checked}','orderController@stt')->name('order-stt');
		
});
Route::get('/','PageController@index')->name('trang-chu');
Route::get('trang-chu','PageController@index')->name('trang-chu');
Route::get('san-pham/{id}','PageController@sanpham')->name('san-pham');
Route::get('gio-hang','PageController@cart')->name('gio-hang');
Route::post('gio-hang','PageController@add')->name('gio-hang');
Route::get('xoa-gio-hang/{id}','PageController@delete')->name('xoa-gio-hang');
Route::get('cat-nhat/{id}/{qty}','PageController@catnhat')->name('cat-nhat');
Route::get('login','PageController@login')->name('login');
Route::post('login','PageController@post_login')->name('login');
Route::get('dang-ky','PageController@register')->name('dang-ky');
Route::post('dang-ky','PageController@post_register')->name('dang-ky');
Route::get('logout','PageController@logout')->name('logout');
Route::get('dat-hang','PageController@order')->name('dat-hang');
Route::post('dat-hang','PageController@post_order')->name('dat-hang');
Route::get('chi-tiet/{id}','PageController@detail')->name('chi-tiet');
Route::get('blog','PageController@blog')->name('blog');
Route::get('lien-he','PageController@contact')->name('lien-he');
Route::get('gioi-thieu','PageController@about')->name('gioi-thieu');
Route::get('search','PageController@search')->name('search');


