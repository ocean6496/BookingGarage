<?php

/*   --------- ROUTE FOR AUTHENTICATION ---------   */

Route::group(['namespace' => 'Auth'], function() {

	Route::get('/login', [
		'uses' => 'AuthController@getLoginCustomer',
		'as' => 'getLoginCustomer'
	]);

	Route::get('/login/garage', [
		'uses' => 'AuthController@getLoginGarage',
		'as' => 'getLoginGarage'
	]);

	Route::get('/login/admin', [
		'uses' => 'AuthController@getLoginAdmin',
		'as' => 'getLoginAdmin'
	]);

	Route::post('/login/{role_page_id}', [
		'uses' => 'AuthController@postLoginCustomer',
		'as' => 'loginCustomer'
	]);

	Route::post('/login/garage/{role_page_id}', [
		'uses' => 'AuthController@postLoginGarage',
		'as' => 'loginGarage'
	]);

	Route::post('/login/admin/{role_page_id}', [
		'uses' => 'AuthController@postLoginAdmin',
		'as' => 'loginAdmin'
	]);

	Route::get('/logout/customer', [
		'uses' => 'AuthController@logoutCustomer',
		'as' => 'logoutCustomer'
	]);

	Route::get('/logout/garage', [
		'uses' => 'AuthController@logoutGarage',
		'as' => 'logoutGarage'
	]);

	Route::get('/logout/admin', [
		'uses' => 'AuthController@logoutAdmin',
		'as' => 'logoutAdmin'
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

Route::group(['namespace' => 'Customer', 'prefix' => 'customer', 'middleware' => 'auth:customer'], function() {
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

Route::group(['namespace' => 'GarageAdmin', 'prefix' => 'garage', 'middleware' => 'auth:garage-admin'], function() {
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

	/*     ===== Route for service =====     */

	Route::get('/service', [
		'uses' => 'ServiceController@getService',
		'as' => 'garageAdmin.service'
	]);

	Route::get('/service/add', [
		'uses' => 'ServiceController@getAdd',
		'as' => 'garageAdmin.service.add'
	]);

	Route::post('/service/add', [
		'uses' => 'ServiceController@postAdd',
		'as' => 'garageAdmin.service.add'
	]);

	Route::get('/service/edit/{id}', [
		'uses' => 'ServiceController@getEdit',
		'as' => 'garageAdmin.service.edit'
	]);

	Route::post('/service/edit/{id}', [
		'uses' => 'ServiceController@postEdit',
		'as' => 'garageAdmin.service.edit'
	]);

	Route::get('/service/delete/{id}', [
		'uses' => 'ServiceController@delete',
		'as' => 'garageAdmin.service.delete'
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

/*   --------- ROUTE FOR CHAT BOT ---------   */

Route::post('botman/chatBot', [
	'uses' => 'Garage\ChatBotController@chatBot'
]);


/*   --------- ROUTE FOR PAGE ERROR ---------   */

Route::get('error', function() {
	return view('errors.error');
})->name('errorPage');


Route::get('/test', function() {
	return view('mail.verifyCustomer');
});