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
Route::get('/home', 'HomeController@index');
Route::get('/learning','SiteController@learning');
Route::get('/about','SiteController@about');
Route::get('/callme','SiteController@call');
Route::post('/callme','SiteController@save');
Route::resource('comment','CommentController');
Route::post('/add','SiteController@add');
Route::get('/checkout','SiteController@checkout');
Route::post('/empty','SiteController@empty_cart');
Route::post('/remove_cart','SiteController@remove_cart');
Route::get('/buy_post','SiteController@buy_post');
Route::post('/buy_post','SiteController@save_buypost');

Route::auth();

Route::get('social/{provider?}','SocialController@getSocialAuth');
Route::get('social/callback/{provider?}','SocialController@getSocialAuthCallback');
//Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
//Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');
// Route::get('redirect/google', 'Auth\AuthController@redirectToGoogle');
// Route::get('callback/google','Auth\AuthController@handleProviderCallbackGoogle');
Route::get('page/{page}','SiteController@index')->where(['page'=>'[0-9]+']);


Route::get('user/panel','UserPanelController@index');
Route::resource('user/panel/profile','ProFileController');
Route::resource('user/panel/request','RequestLearning');
Route::resource('user/panel/favorits','FavoritsController');
Route::resource('user/panel/qustion', 'QustionController');
Route::resource('user/panel/ansewer', 'UserAnsewerController');


Route::get('/admin','AdminController@index');
Route::post('/admin/save','AdminController@store');
Route::resource('admin/post','PostController');
Route::resource('admin/user','UserController');
Route::resource('admin/question','AdminQuestionController');
Route::resource('admin/request','AdminRequestController');
Route::resource('admin/category','CategoryController');
Route::resource('admin/comment','AdminCommentController');
Route::resource('admin/ansewer','AdminAnsewerController');
Route::resource('admin/call','AdminCallController');
Route::resource('admin/buy/posti','AdminBuyPosti');
Route::get('/admin/buy/posti/{id}/{state}','AdminBuyPosti@state');




Route::post('/send','TestController@index');
Route::post('/test','TestController@save');
Route::get('/test','TestController@show');