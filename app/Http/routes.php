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
Route::get('/','ArticleController@index');
//Route::get('/', function () {
//    return view('welcome');
//});

//会员操作
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@getRegister');

Route::get('auth/logout','Auth\AuthController@getLogout');

//可选参数：name 函数内为默认值
//Route::get('user/{name?}', function ($name = 'frankie') {
//    return 'Hello '.$name;
//});
/*
Route::get('/','ArticleController@index');
Route::get('article/create','ArticleController@create');
Route::post('article/store','ArticleController@store');
Route::get('article/{id}','ArticleController@show');
 */

// 文章资源路由
Route::resource('articles','ArticleController');

