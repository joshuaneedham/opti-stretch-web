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
