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

Auth::routes();

Route::prefix('adm')->middleware('auth')->group(function () {

	Route::get('/', function () {

	   return view('adm.index');

	});
	Route::resource('posts', 'PostsController');

	Route::prefix('posts')->group(function () {
	Route::get('comments/{post_id}/create', 'CommentController@create')
	->name('comments.create');
	Route::post('comments/{post_id}', 'CommentController@store')
	->name('comments.store');
	Route::delete('comments/{comment}', 'CommentController@destroy')
	->name('comments.destroy');
	});
});
// Route::prefix('posts')->group(function () {
// 	Route::get('/', 'PostsController@index')->name('posts.index');
// 	Route::get('/create', 'PostsController@create')->name('posts.create');
// 	Route::post('/', 'PostsController@store')->name('posts.store');
// 	Route::get('/{id}', 'PostsController@show')->name('posts.show');
// 	Route::get('/{id}/edit', 'PostsController@edit')->name('posts.edit');
// 	Route::put('/{id}', 'PostsController@update')->name('posts.update');
// 	Route::delete('/{id}', 'PostsController@destroy')->name('posts.destroy');
// });




Route::get('/home', 'HomeController@index')->name('home');
