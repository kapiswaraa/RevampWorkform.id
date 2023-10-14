<?php

// routes/web.php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\HomeController;

// ...
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
//customer
Route::get('/customer/login', 'App\Http\Controllers\CustomerController@showLoginForm')->name('customer.login');
Route::post('/customer/login', 'App\Http\Controllers\CustomerController@login');
Route::get('/customer/register', 'App\Http\Controllers\CustomerController@showRegistrationForm')->name('customer.register');
Route::post('/customer/register', 'App\Http\Controllers\CustomerController@register');
Route::get('/customer/profile', 'App\Http\Controllers\CustomerController@showProfile')->name('customer.profile');
Route::get('customer/forgot', 'App\Http\Controllers\CustomerController@showForgot')->name('customer.forgot');
Route::post('customer/forgot', 'App\Http\Controllers\CustomerController@sendResetLink');
Route::get('/customer', 'App\Http\Controllers\CustomerController@index')->name('customer.home');
Route::get('/customer/profile', 'App\Http\Controllers\CustomerController@showProfile')->name('customer.profile');
Route::post('customer/profile/update', 'App\Http\Controllers\CustomerController@updateProfile')->name('profile.update');
Route::get('/customer/list', 'App\Http\Controllers\CustomerController@showList')->name('customer.list');
Route::get('/customer/logout', 'App\Http\Controllers\CustomerController@logout')->name('customer.logout');
Route::get('/customer/products/search', 'App\Http\Controllers\CustomerController@searchProducts')->name('customer.product.search');
Route::get('/customer/products/sort', 'App\Http\Controllers\CustomerController@pricesort')->name('customer.price.sort');
Route::get('/customer/products/period', 'App\Http\Controllers\CustomerController@sortkategori')->name('customer.sort.kategori');
Route::get('/customer/products/category', 'App\Http\Controllers\CustomerController@sortfasilitas')->name('customer.sort.fasilitas');
Route::get('/customer/products/location', 'App\Http\Controllers\CustomerController@sortlokasi')->name('customer.sort.lokasi');
Route::get('/customer/products/detail/{product}', 'App\Http\Controllers\CustomerController@detail')->name('customer.product.detail');
Route::get('/customer/products/nearme', 'App\Http\Controllers\CustomerController@sortnearme')->name('customer.sort.nearme');
//host
Route::get('/host/login', 'App\Http\Controllers\HostController@showLoginForm')->name('host.login');
Route::post('/host/login', 'App\Http\Controllers\HostController@login');
Route::get('/host/register', 'App\Http\Controllers\HostController@showRegistrationForm')->name('host.register');
Route::post('/host/register', 'App\Http\Controllers\HostController@register');
Route::get('/host/profile', 'App\Http\Controllers\HostController@showProfile')->name('host.profile');
Route::post('/host/profile', 'App\Http\Controllers\HostController@updateProfile')->name('host.profile.update');
Route::get('host/forgot', 'App\Http\Controllers\HostController@showForgot')->name('host.forgot');
Route::post('host/forgot', 'App\Http\Controllers\HostController@sendResetLink');
Route::get('/host', 'App\Http\Controllers\HostController@index')->name('host.home');
Route::get('/host/logout', 'App\Http\Controllers\HostController@logout')->name('host.logout');
Route::get('/host/product', 'App\Http\Controllers\HostController@product')->name('host.product');
Route::post('/host/products/store', 'App\Http\Controllers\HostController@productstore')->name('host.product.store');;
Route::get('/host/product/last', 'App\Http\Controllers\HostController@showLastProduct')->name('last.product');
