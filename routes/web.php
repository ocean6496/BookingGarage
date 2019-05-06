<?php

/*   --------- ROUTE FOR AUTHENTICATION ---------   */

Route::group(['namespace' => 'Auth'], function() {

	Route::get('/login', [
		'uses' => 'AuthController@getLogin',
		'as' => 'getLogin'
	]);

	Route::get('/loginCustomer', [
		'uses' => 'AuthController@getLoginCustomer',
		'as' => 'loginCustomer'
	]);

	Route::post('/login/{role_page_id}', [
		'uses' => 'AuthController@postLogin',
		'as' => 'postLogin'
	]);

	Route::get('/logout', [
		'uses' => 'AuthController@logout',
		'as' => 'logout'
	]);

	Route::get('/verify', [
		'uses' => 'AuthController@verify',
		'as' => 'verify'
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

	Route::post('/change-password', [
		'uses' => 'IndexController@getChangePassword',
		'as' => 'admin.changePassword'
	]);

	/*     ===== Route for garage =====     */

	Route::get('/garage', [
		'uses' => 'GarageController@index',
		'as' => 'admin.garage'
	]);

	Route::get('/garage/add', [
		'uses' => 'GarageController@getAdd',
		'as' => 'admin.garage.add'
	]);

	Route::post('/garage/add', [
		'uses' => 'GarageController@postAdd',
		'as' => 'admin.garage.add'
	]);

	Route::get('/garage/edit/{id}', [
		'uses' => 'GarageController@getEdit',
		'as' => 'admin.garage.edit'
	]);

	Route::post('/garage/edit/{id}', [
		'uses' => 'GarageController@postEdit',
		'as' => 'admin.garage.edit'
	]);

	Route::get('/garage/delete/{id}', [
		'uses' => 'GarageController@delete',
		'as' => 'admin.garage.delete'
	]);

	/*     ===== Route for customer =====     */

	Route::get('/customer', [
		'uses' => 'CustomerController@index',
		'as' => 'admin.customer'
	]);

	Route::get('/customer/add', [
		'uses' => 'CustomerController@getAdd',
		'as' => 'admin.customer.add'
	]);

	Route::post('/customer/add', [
		'uses' => 'CustomerController@postAdd',
		'as' => 'admin.customer.add'
	]);

	Route::get('/customer/edit/{id}', [
		'uses' => 'CustomerController@getEdit',
		'as' => 'admin.customer.edit'
	]);

	Route::post('/customer/edit/{id}', [
		'uses' => 'CustomerController@postEdit',
		'as' => 'admin.customer.edit'
	]);

	Route::get('/customer/delete/{id}', [
		'uses' => 'CustomerController@delete',
		'as' => 'admin.customer.delete'
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

	/*     ===== Route for feedback =====     */

	Route::get('/feedback', [
		'uses' => 'FeedbackController@getFeedback',
		'as' => 'admin.feedback'
	]);

});

/*   --------- ROUTE FOR CUSTOMER ADMIN---------   */

Route::group(['namespace' => 'Customer', 'prefix' => 'customer', 'middleware' => 'auth'], function() {
	Route::get('/', [
		'uses' => 'IndexController@index',
		'as' => 'customer.index'
	]);

	Route::get('/feedback', [
		'uses' => 'IndexController@getFeedback',
		'as' => 'customer.feedback'
	]);

	Route::post('/feedback', [
		'uses' => 'IndexController@postFeedback',
		'as' => 'customer.feedback'
	]);
});

/*   --------- ROUTE FOR GARAGE ADMIN ---------   */

Route::group(['namespace' => 'GarageAdmin', 'prefix' => 'garage', 'middleware' => 'auth'], function() {
	Route::get('/', [
		'uses' => 'IndexController@index',
		'as' => 'garageAdmin.index'
	]);

	Route::get('/customer', [
		'uses' => 'CustomerController@getCustomer',
		'as' => 'garageAdmin.customer'
	]);

	Route::get('/booking', [
		'uses' => 'BookingController@getBooking',
		'as' => 'garageAdmin.booking'
	]);

	Route::get('/feedback', [
		'uses' => 'FeedbackController@getFeedback',
		'as' => 'garageAdmin.feedback'
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

	Route::get('/payment/{access_token}-{id}', [
		'uses' => 'BookingController@payment',
		'as' => 'garage.payment'
	]);

	Route::get('/booking-success/{access_token}-{id}', [
		'uses' => 'BookingController@bookingSuccess',
		'as' => 'garage.success'
	]);


});


Route::get('/test', function() {
	return view('garage.success');
});