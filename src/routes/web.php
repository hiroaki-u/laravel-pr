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

Route::get('/', 'PostController@index');
Route::get('post/index', 'PostController@index');

route::group(["middleware" => "auth"], function () {
  Route::resource("post", 'PostController')->except(["index", "show", "edit"]);
  Route::get('post/edit/{id}', 'PostController@edit')->name('post.edit');
});
Route::get('post/show/{id}', 'PostController@show')->name('post.show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
