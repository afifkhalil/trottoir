<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('back.inc.default');
});

Route::group(['prefix'=>'backoffice', 'middleware'=>'auth'],function(){
	Route::group(['prefix'=>'users'],function(){
		Route::get('',['uses'=>'UserController@allUser']);
	});
	Route::group(['prefix'=>'reclamations'],function(){
		Route::get('new',['uses'=>'ReclamationController@getnewReclamation']);
	});


});

Route::group(['prefix'=>'api'],function(){


	
	Route::group(['prefix'=>'user'],function(){

		Route::post('login',['uses'=>'UserController@loginUser']);
		
		Route::get('{id}',['uses'=>'UserController@getUser']);

		Route::post('add',['uses'=>'UserController@saveUser']);

		Route::put('{id}',['uses'=>'UserController@updateUser']);



		Route::group(['prefix'=>'reclamation'],function(){

			Route::post('add',['uses'=>'ReclamationController@saveReclamation']);

			Route::get('/get',['uses'=>'ReclamationController@getReclamation']);

			Route::post('modifier/{id}',['uses'=>'ReclamationController@updateReclamation']);
			//Route::delete('{id}',['uses'=>'ReclamationController@deleteReclamation']);
		});	
		
	});

	
	
});
Auth::routes();

Route::get('/home', 'HomeController@index');
