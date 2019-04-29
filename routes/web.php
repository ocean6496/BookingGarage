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

	Route::get('/change-password', [
		'uses' => 'IndexController@changePassword',
		'as' => 'admin.changePassword'
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

	/*     ===== Route for service =====     */

	Route::get('/service', [
		'uses' => 'ServiceController@getService',
		'as' => 'admin.service'
	]);

	Route::get('/service/add', [
		'uses' => 'ServiceController@getAdd',
		'as' => 'admin.service.add'
	]);

	Route::post('/service/add', [
		'uses' => 'ServiceController@postAdd',
		'as' => 'admin.service.add'
	]);

	Route::get('/service/edit/{id}', [
		'uses' => 'ServiceController@getEdit',
		'as' => 'admin.service.edit'
	]);

	Route::post('/service/edit/{id}', [
		'uses' => 'ServiceController@postEdit',
		'as' => 'admin.service.edit'
	]);

	Route::get('/service/delete/{id}', [
		'uses' => 'ServiceController@delete',
		'as' => 'admin.service.delete'
	]);

	/*     ===== Route for contact =====     */

	Route::get('/contact', [
		'uses' => 'ContactController@getContact',
		'as' => 'admin.contact'
	]);

	Route::get('/contact/add', [
		'uses' => 'ContactController@getAdd',
		'as' => 'admin.contact.add'
	]);

	Route::post('/contact/add', [
		'uses' => 'ContactController@postAdd',
		'as' => 'admin.contact.add'
	]);

	Route::get('/contact/delete/{id}', [
		'uses' => 'ContactController@delete',
		'as' => 'admin.contact.delete'
	]);

	/*     ===== Route for booking =====     */

	Route::get('/booking', [
		'uses' => 'BookingController@getBooking',
		'as' => 'admin.booking'
	]);

});

/*   --------- ROUTE FOR CUSTOMER ---------   */

Route::group(['namespace' => 'Customer', 'prefix' => 'customer', 'middleware' => 'auth'], function() {
	Route::get('/', [
		'uses' => 'IndexController@index',
		'as' => 'customer.index'
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

	Route::post('/service', [
		'uses' => 'BookingController@getService',
		'as' => 'garage.service'
	]);

	Route::post('/choise-garage/{car_id}-{car_model_id}', [
		'uses' => 'BookingController@choiseGarage',
		'as' => 'garage.choiseGarage'
	]);

	Route::post('/account/{car_id}-{car_model_id}', [
		'uses' => 'BookingController@getUser',
		'as' => 'garage.getUser'
	]);

	Route::get('/booking/{car_id}-{car_model_id}', [
		'uses' => 'BookingController@booking',
		'as' => 'garage.booking'
	]);

});


Route::get('/test', function() {
	return view('garage.payment');
});