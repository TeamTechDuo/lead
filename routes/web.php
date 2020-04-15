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
Route::get('/main', function () {
    return view('main.main');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});


Route::resource('country', 'CountryController')->except(['show','create']);
Route::resource('division', 'DivisionController')->except(['show','create']);
Route::resource('city', 'CityController')->except(['show','create']);
Route::resource('area', 'AreaController')->except(['show','create']);
Route::resource('category', 'CategoryController')->except(['show','create']);
Route::resource('subcategory', 'SubCategoryController')->except(['show','create']);
Route::resource('lead', 'LeadController')->except(['show','create']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
