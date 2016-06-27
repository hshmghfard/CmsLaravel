<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('/', 'HomeController');
Route::get('/content/{title}','SiteController@show2');


Route::get('user/panel','UserPanelController@index');

Route::get('/admin','AdminController@index');
Route::post('/admin/save','AdminController@store');
// Route::get('/login','LoginController@index');
Route::auth();


Route::resource('user/panel/profile','ProFileController');
Route::resource('user/panel/request','RequestLearning');
Route::resource('user/panel/favorits','FavoritsController');
Route::resource('user/panel/qustion', 'QustionController');



Route::resource('admin/post','PostController');
Route::resource('admin/user','UserController');
Route::resource('admin/category','CategoryController');
Route::get('/home', 'HomeController@index');

Route::get('/send','TestController@index');


Route::resource('comment','CommentController');