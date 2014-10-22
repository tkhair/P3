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
	return View::make('index');
	//return 'Hello world!';
});

//Route::controller(Controller::detect());

//create options form
Route::get('/users', array(
    'as' => 'UsersController.new',
    'uses' => 'UsersController@add'
) );
 
//results 
Route::post('/users', array(
    'as' => 'UsersController.create',
    'uses' => 'UsersController@create'
) );

//create options form
Route::get('/lorem', array(
    'as' => 'LoremController.new',
    'uses' => 'LoremController@add'
) );

//results  
Route::post('/lorem', array(
    'as' => 'LoremController.create',
    'uses' => 'LoremController@create'
) );