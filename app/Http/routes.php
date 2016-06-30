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

//Route::get('/', function () {
//    return view('welcome');
//});


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
Route::get('/','ArticleController@index');
// 资源路由
Route::resource('articles','ArticleController');
