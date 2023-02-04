<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'pages/home');
Route::get('/testCron', 'ArticleController@testCronNewArticles');

Route::prefix('articles')->group(function () {
	Route::get('/', 'ArticleController@index');
	Route::get('/{id}', 'ArticleController@details');
	Route::view('/form', 'pages/form-article');
	Route::post('/', 'ArticleController@save');
	Route::put('/{id}', 'ArticleController@save');
	Route::delete('/{id}', 'ArticleController@delete');
});
