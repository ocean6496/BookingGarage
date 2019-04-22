<?php

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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('/', [
		'uses' => 'IndexController@index',
		'as' => 'admin.index'
	]);

	Route::get('/profile', [
		'uses' => 'IndexController@getProfile', 
		'as' => 'admin.profile'
	]);

	Route::get('/garage', [
		'uses' => 'GarageController@index',
		'as' => 'admin.garage'
	]);

	Route::get('/garage/add', [
		'uses' => 'GarageController@getAdd',
		'as' => 'admin.garage.add'
	]);

	Route::get('/garage/edit', [
		'uses' => 'GarageController@getEdit',
		'as' => 'admin.garage.edit'
	]);

});


/*   --------- ROUTE FOR PUBLIC GARAGE ---------   */

Route::group(['namespace' => 'Garage'], function() {

	Route::get('/', [
		'uses' => 'IndexController@getIndex',
		'as' => 'garage.index'
	]);

	Route::get('/car', [
		'uses' => 'BookingController@getCar',
		'as' => 'garage.getCar'
	]);

	Route::get('/get-car-model/{car_id}', [
		'uses' => 'BookingController@getCarModel',
	]);

	Route::get('/service', [
		'uses' => 'BookingController@getService',
		'as' => 'garage.service'
	]);

	Route::get('/choise-garage/{car_id}-{car_model_id}', [
		'uses' => 'BookingController@choiseGarage',
		'as' => 'garage.choiseGarage'
	]);

	Route::get('/account/{car_id}-{car_model_id}', [
		'uses' => 'BookingController@getUser',
		'as' => 'garage.getUser'
	]);

	Route::get('/booking/{car_id}-{car_model_id}', [
		'uses' => 'BookingController@booking',
		'as' => 'garage.booking'
	]);

});


Route::get('/test', function() {
	return view('garage.cart');
});