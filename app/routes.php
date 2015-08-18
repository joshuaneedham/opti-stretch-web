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

Route::get('/', function()
{
	return View::make('home');
});
Route::get('/company-overview', function(){
	return View::make('overview');
});
Route::get('/biographies', function(){
	return View::make('biographies');
});
Route::get('/in-the-media', function(){
	return View::make('inthemedia');
});
Route::get('/frequently-asked-questions', function(){
	return View::make('faq');
});
Route::get('/knowledge-base', function(){
	return View::make('kb');
});
Route::get('/classes', function(){
	return View::make('classes');
});
Route::get('/testimonials', function(){
	return View::make('testimonials');
});

Route::get('/purchase', function(){
	return View::make('purchase');
});

Route::get('/book/{id?}', ['before' => ['auth', 'subscription'], function($id = '000'){
//Route::get('/book/{id?}', function($id = '000'){
	$bookpage = file_get_contents(app_path() . '/bookpages/bp_' . $id . '.htm');
	$previous = null;
	$next = null;
	if (file_exists(app_path() . '/bookpages/bp_' . str_pad($id - 1, 3, '0', STR_PAD_LEFT) . '.htm')) {
		$previous = str_pad($id - 1, 3, '0', STR_PAD_LEFT);
	}
	if (file_exists(app_path() . '/bookpages/bp_' . str_pad($id + 1, 3, '0', STR_PAD_LEFT) . '.htm')) {
		$next = str_pad($id + 1, 3, '0', STR_PAD_LEFT);
	}
	return View::make('book.bookpage')
		->with('bookpage', $bookpage)
		->with('previous', $previous)
		->with('next', $next);
}]);
//	});
//
Route::get('checkenv', function(){
	return App::environment();
});
// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');


Route::get('/populate-roles', function(){
	//Abort creation - comment next line
	//to repopulate the roles and permissions if resetting/deploying for the first time.
	return 'Already done.';

	$administrator = new Role();
	$administrator->name = "Administrator";
	$administrator->save();

	$subscriber = new Role();
	$subscriber->name = "Subscriber";
	$subscriber->save();

	$read = new Permission();
	$read->name = 'can_read_book';
	$read->display_name = "Can read eBook pages";
	$read->save();

	$video = new Permission();
	$video->name = 'can_view_video';
	$video->display_name = 'Can view videos';
	$video->save();

	$administrator->attachPermission($read);
	$administrator->attachPermission($video);

	$subscriber->attachPermission($read);
	$subscriber->attachPermission($video);

	$user1 = User::find(1);
	$user1->attachRole($subscriber);
	$user1->attachRole($administrator);

	return 'Created Roles and Permissions.';

});
