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


// showpages frontend
// Function added : 03-06-13 
// Problems: not working 
Route::resource('/', 'ShowPagescontroller');


// Contact form 
Route::post('contact_request', 'ContactController@getContactUsForm');




// pages posts cms
// Function added : 03-06-13 
// Problems: none 
Route::resource('pages', 'Pagescontroller');
Route::resource('pages.posts', 'Postscontroller');




// Authenication 
// Function added : 03-06-13 
// Problems: none 

Route::get('dashboard', function(){

	$Welkom =  "Welkom je email is " . Auth::user()->email;

	return View::make('dashboard.index', compact('Welkom') );
	
})->before('auth');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController');