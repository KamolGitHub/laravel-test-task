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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/parcels', 'ParcelController@index')->name('parcel.index');
Route::post('/parcels/register-prohibited-items', 'ParcelController@register')->name('parcel.register_prohibited_items');
Route::get('/parcels/register-prohibited-items', 'ShippingRequestController@scan')->name('shipping_request.scan_prohibited_items');
Route::get('/shipping-request/scan', 'ShippingRequestController@form_scan')->name('shipping_request.form_scan');

