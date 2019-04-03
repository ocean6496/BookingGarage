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

});


Route::resource('roles', 'RoleController');