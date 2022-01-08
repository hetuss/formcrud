<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('records','FormController@views')->name('insrtss');
// for show form

Route::post('record','FormController@inserts')->name('insrts');

Route::get('view-records','FormController@show')->name('admin.product');
// editproduct

Route::get('edit/{id}','FormController@editproducts')->name('edit.product');
Route::post('update','FormController@update')->name('update.product');
Route::get('delete/{id}','FormController@delete_product')->name('delete.product');
