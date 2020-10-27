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

Route::get('/', 'BankController@index');
Route::get('/{BankName}', 'BankController@showState');
Route::get('/{BankName}/{State}', 'BankController@showDistrict');
Route::get('/{BankName}/{State}/{District}', 'BankController@showBranch');
Route::get('/{BankName}/{State}/{District}/{Branch}', 'BankController@showIfsc');

/* Route::get('/', function () {
    return view('homepage');
}); */



/* Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('item', 'ItemController@create');
Route::post('item', 'ItemController@store')->name('store'); */