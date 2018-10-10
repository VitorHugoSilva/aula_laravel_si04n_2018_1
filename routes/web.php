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
Route::prefix('posts')->group(function () {
	Route::get('/', 'PostsController@index')->name('posts.index');
	Route::get('/create', 'PostsController@create')->name('posts.create');
	Route::post('/', 'PostsController@store')->name('posts.store');
	Route::get('/{id}', 'PostsController@show')->name('posts.show');
	Route::get('/{id}/edit', 'PostsController@edit')->name('posts.edit');
	Route::put('/{id}', 'PostsController@update')->name('posts.update');
	Route::delete('/{id}', 'PostsController@destroy')->name('posts.destroy');
});

