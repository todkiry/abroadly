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


# Model
Route::model('user', 'User');
Route::model('question', 'Question');


# Home
Route::get('/', [
	'as' => 'home', 
	'uses' => 'PagesController@home']);



# Signup 

Route::get('signup', [
	'as'=> 'signup.create',
	'uses' => 'SignupController@create'])->before('guest');

Route::post('signup', [
	'as' => 'signup.store', 
	'uses' => 'SignupController@store']);


# Authentication

Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout','SessionsController@destroy');
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy' ]]);

/* Route::get('home', function()
{
	return 'homepage';
})->before('auth');*/


# Questions
Route::resource('questions', 'QuestionsController');

# Answers
//Route::resource('answers', 'AnswersController');
Route::get('/questions/{questionid}/answer', [
	'as' => 'answers.create',
	'uses' => 'AnswersController@create'
	]);
Route::post('/answer/', [
	'as'=>'answers.store',
	'uses' => 'AnswersController@store'
	]);


# Profile
Route::resource('profile', 'ProfilesController', ['only' => ['show', 'edit', 'update']]);

Route::get('profiles/{profile}', [
	'as'=>'profile.show',
	'uses'=> 'ProfilesController@show']);

Route::get('profiles/{profile}/edit', [
	'as'=>'profile.edit',
	'uses'=> 'ProfilesController@edit']);

# Place 
Route::resource('places', 'PlacesController');
Route::get('data', function() {
	$places = Place::all();
	return $places;
});


# send mail
Route::get('sendmail', function()
{
	Mail::send('emails.question', [], function($message)
	{
		$message->to('todkiry@gmail.com')->subject('Test');
	});
});



