<?php 


use Archaic\Billing\StripeBilling;
use Archaic\BillingInterface;


App::bind('Archaic\Billing\BillingInterface', 'Archaic\Billing\StripeBilling');

// GENERAL PAGE ROUTES
Route::get('/', ['as' => '/', 'uses' => 'PagesController@welcome']);

Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);

Route::get('contact', ['as' => 'contact', 'uses' => 'PagesController@create']);

Route::post('contact_store', ['as' => 'contact_store', 'uses' => 'PagesController@store']);

Route::get('courses', ['uses' => 'CoursesController@index', 'as' => 'courses'] );

Route::post('enroll', function(){ 

	$billing = App::make('Archaic\Billing\BillingInterface');

	return $billing->charge([
		'email' => Input::get('email'),
		'token' => Input::get('stripe-token')
		]);
});

// Use this when you are ready to take credit cards
// Route::get('enroll', ['as' => 'enroll', 'uses' => 'PagesController@enroll']);
// Temporary Paypal route.
Route::get('register', ['as' => 'register', 'uses' => 'PagesController@register']);





// COURSE RELATED ROUTES (only displays upcoming courses, not the registration views)


// Route::get('/{id}', ['as' => '/{$id}', 'uses' => 'CoursesController@show']);




// COURSE REGISTRATION ROUTES (because being registerd for courses
// should be totally separate from viewing the courses. )
Route::resource('registration', 'RegistrationController');



// PROTECTED PAGE ROUTES
Route::get('student', ['middleware' => 'enrolled', function(){
	return "student dashboard";
}]);

Route::get('/curriculum/syllabus', ['as' => 'curriculum.syllabus', 'uses' => 'CurriculumController@syllabus']);

Route::get('admin', ['middleware' => 'auth.basic', function() {
	return "Welcome to the admin section.";
}]);

// Route::get('/account', ['as' => 'account.settings', 'uses' => 'AccountController@accountSettings']);
// Route::patch('/account', ['as' => 'account.user.save', 'uses' => 'AccountController@update']);
// Route::get('/account/billing', ['as' => 'account.billing', 'uses' => 'AccountController@billingProfile']);
Route::post('/account/save_billing', ['as' => 'account.billing.save', 'uses' => 'AccountController@saveBilling']);
// Route::get('/account/order_history', ['as' => 'account.orders', 'uses' => 'AccountController@orderHistory']);
// Route::get('/account/unredeemed_deals', ['as' => 'account.unredeemed', 'uses' => 'AccountController@showUnredeemedDeals']);
