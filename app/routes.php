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
	return View::index('make');
});

//Route::controller(Controller::detect());

Route::get('/users', function()
{
	return View::make('users');
});

Route::get('/lorem', array(
    'as' => 'LoremController.new',
    'uses' => 'LoremController@add'
) );
 
Route::post('/lorem', array(
    'as' => 'LoremController.create',
    'uses' => 'LoremController@create'
) );