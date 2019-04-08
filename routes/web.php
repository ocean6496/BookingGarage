<?php

Route::get('/', function () {
    return view('garage.index');
});


/*   --------- ROUTE FOR AUTHENTICATION ---------   */

Route::group(['namespace' => 'Auth'], function() {

	Route::get('/login', [
		'uses' => 'AuthController@getLogin',
		'as' => 'login'
	]);

	Route::post('/login', [
		'uses' => 'AuthController@postLogin',
		'as' => 'login'
	]);

	Route::get('/logout', [
		'uses' => 'AuthController@logout',
		'as' => 'logout'
	]);

});


/*   --------- ROUTE FOR ADMIN ---------   */

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function() {

	Route::get('/admin', [
		'uses' => 'IndexController@index',
		'as' => 'admin.index'
	]);

	Route::get('/admin/profile', [
		'uses' => 'IndexController@getProfile', 
		'as' => 'admin.profile'
	]);

	Route::get('/admin/garage', [
		'uses' => 'GarageController@index',
		'as' => 'admin.garage'
	]);

});


Route::resource('roles', 'RoleController');