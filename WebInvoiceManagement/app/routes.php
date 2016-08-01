<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });


Route::group(['prefix' => 'admin'], function () {
	Route::get('/login', array('uses' => 'AdminController@login', 'as' => 'admin.login'));
	Route::post('/login', array('uses' => 'AdminController@doLogin'));
	Route::get('/logout', array('uses' => 'AdminController@logout',  'as' => 'admin.logout'));
	// Route::resource('/layout', 'AdminController');
	Route::resource('/register', 'RegisterController');
	Route::resource('/', 'AdminController');
	//dang ky
	// ban hang
	Route::post('/product/bill/assignImportBill', 'ImportBillController@assignImportBill');
	Route::resource('product/sell', 'SellController');
	Route::resource('product/bill', 'ImportBillController');
	//loai san pham
	Route::resource('product/type', 'TypeController');
	Route::resource('/product', 'ProductController');
	//khach hang
	Route::resource('/customer/group', 'GroupCustomerController');
	Route::resource('/customer', 'CustomerController');
	
	
});
// Route::group(
// 	['prefix' => 'user'], function(){
// 		Route::get('/login', array('uses' => 'UserController@login', 'as' => 'user.login'));

// 	}
// );