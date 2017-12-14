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



Auth::routes();

Route::get('/', 'IndexController@index')->name('home');
Route::get('/settings', 'HomeController@settings')->name('settings');
Route::post('/edituser/{id}', 'UserController@edit')->name('id');
Route::post('/edit/{id}', 'BouticController@edit')->name('bid');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/profile/{id}', 'UserController@profileid');
Route::get('/bset/{id}', 'HomeController@bsettings');
Route::get('/notice','HomeController@notice')->name('notice');
Route::get('/center/{id}','CenterController@show');
Route::get('/api/center/{id}','CenterController@showajax');

Route::get('/products/{id}', 'ProductController@show')->name('showProduct');
Route::get('/product/{id}', 'ProductController@showproduct')->name('showProduct');
Route::get('/product/del/{id}', 'ProductController@destroy');

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
    Route::get('/admin', 'AdminController@index');

    Route::get('/createtype', 'TypeController@create');
    Route::post('/storetype', 'TypeController@store')->name('storetype');

    Route::get('/createmaintype', 'MaintypeController@create');
    Route::post('/storemaintype', 'MaintypeController@store')->name('storemaintype');


});

Route::get('/creatediscount', 'DiscountController@create');
Route::post('/storediscount', 'DiscountController@store')->name('storeDiscount');
Route::get('/edit/product/{id}', 'ProductController@edit');
Route::post('/discounts', 'DiscountController@edit');
Route::post('/update/product', 'ProductController@update');
Route::post('/reset/product', 'ProductController@reset');
Route::post('/bproduct', 'ProductController@bouticshow');

Route::get('/products', 'ProductController@index')->name('products');

Route::post('like', 'LikeController@index');
Route::post('buy','BuyController@index');
Route::get('/comment/{id}/{u_id}', 'CommentController@index');
Route::get('/sort/{id}', 'ProductController@sort');

Route::post('/subscribe', 'SubscribeController@index');
Route::get('/is-subs', 'SubscribeController@is_index');
Route::get('/subscribescount/{id}', 'SubscribeController@count');

Route::get('/boutics', 'BouticController@index');
Route::get('/centers', 'CenterController@index');

Route::get('/cat/{id}', 'CatController@sort');
Route::get('/sorttype/{id}', 'BouticController@sort');
Route::get('/sortmaintype/{id}', 'BouticController@msort');
Route::get('/subcount/{id}', 'UserController@subcount');

Route::get('/admin','AdminController@index')->name('admin');
Route::get('/sdiscounts', 'DiscountController@discounts')->name('sdiscounts');
Route::get('/panel/{id}', 'BouticController@panel')->name('panel');
Route::get('/sell/{id}', 'BuyController@sell')->name('sell');


