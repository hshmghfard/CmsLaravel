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
Route::get('/category/{cat}','SiteController@ShowByCategory');
Route::get('/tag/{tag}','SiteController@ShowByTag');

Route::get('user/panel','UserPanelController@index');

Route::get('/admin','AdminController@index');
Route::post('/admin/save','AdminController@store');
// Route::get('/login','LoginController@index');
Route::auth();


Route::resource('user/panel/profile','ProFileController');
Route::resource('user/panel/request','RequestLearning');
Route::resource('user/panel/favorits','FavoritsController');
Route::resource('user/panel/qustion', 'QustionController');

Route::get('page/{page}','SiteController@index')->where(['page'=>'[0-9]+']);



Route::resource('admin/post','PostController');
Route::resource('admin/user','UserController');
Route::resource('admin/question','AdminQuestionController');
Route::resource('admin/request','AdminRequestController');
Route::resource('admin/category','CategoryController');
Route::resource('admin/comment','AdminCommentController');
Route::resource('admin/ansewer','AdminAnsewerController');
Route::get('/home', 'HomeController@index');




Route::get('/send','TestController@index');
Route::post('/test','TestController@save');
Route::get('/test','TestController@show');

Route::resource('comment','CommentController');