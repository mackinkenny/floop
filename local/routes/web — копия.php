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
Route::get('/settings', 'HomeController@settings')->name('settings');
Route::post('/edit/{id}', 'UserController@edit')->name('id');
Route::get('/profile', 'UserController@profile')->name('profile');

Route::get('/createproduct', 'ProductController@create')->name('createProduct');
Route::post('/storeproduct', 'ProductController@store')->name('storeProduct');

Route::get('/createboutic', 'BouticController@create')->name('createBoutic');
Route::post('/storeboutic', 'BouticController@store')->name('storeBoutic');

Route::get('/createbrand', 'BrandController@create')->name('createBrand');
Route::post('/storebrand', 'BrandController@store')->name('storeBrand');

Route::get('/createcat', 'CatController@create')->name('createCat');
Route::post('/storecat', 'CatController@store')->name('storeCat');

Route::get('/createcenter', 'CenterController@create')->name('createCenter');
Route::post('/storecenter', 'CenterController@store')->name('storeCenter');

Route::get('/products', 'ProductController@index')->name('products');

Route::get('/sort', 'CatController@sort')->name('sort');
Route::get('/all', 'HomeController@all');