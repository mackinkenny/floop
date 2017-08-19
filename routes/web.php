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

Route::post('/', 'HomeController@all')->name('filter');
Route::get('/', 'HomeController@all');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/settings', 'HomeController@settings')->name('settings');
Route::post('/edit/{id}', 'UserController@edit')->name('id');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/profile/{id}', 'UserController@profileid');
Route::get('/notice','HomeController@notice')->name('notice');
Route::get('/center/{id}','CenterController@show');

Route::get('/products/{id}', 'ProductController@show')->name('showProduct');

Route::group(['middleware' => ['admin']],function() {



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


});

Route::get('/creatediscount', 'DiscountController@create');
Route::post('/storediscount', 'DiscountController@store')->name('storeDiscount');
Route::get('/edit/product/{id}', 'ProductController@edit');
Route::post('/update/product', 'ProductController@update');
Route::post('/reset/product', 'ProductController@reset');
Route::post('/bproduct', 'ProductController@bouticshow');

Route::get('/products', 'ProductController@index')->name('products');

Route::post('/like', 'LikeController@index');
Route::post('/buy','BuyController@index');
Route::post('/comment/{id}/{u_id}', 'CommentController@index');

Route::post('/subscribe', 'SubscribeController@index');
Route::post('/subscribescount', 'SubscribeController@count');

Route::get('/boutics', 'BouticController@index');
