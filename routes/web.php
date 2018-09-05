<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');

});

Route::post('/', function() {

	return "Esse dado é post";

});

Route::prefix('adm')->group(function () {

	Route::get('/', function () {

	   return view('adm.index');

	});

	Route::get('/users', function () {

	   return view('adm.user');

	});
	Route::get('/users/{user}', function ($user) {

	   return view('adm.user', [ 'user' => $user ]);

	});
});



