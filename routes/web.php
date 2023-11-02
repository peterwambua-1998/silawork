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


Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/shop', 'ShopController');

Route::resource('/products', 'ProductController');

Route::get('/sellwithus', function(){
    return view('shops.sell_instructions');
})->name('sellwithus');

Route::get('/search-results', 'SearchController@index')->name('search');
Route::get('/search-category', 'SearchController@category')->name('search-category');

