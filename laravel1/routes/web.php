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


use App\Http\Controllers\ArticleController ;
use App\Http\Controllers\Product\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function (){
// 	return view('frontend.home');
// });

// Route::get('/room', function(){
// 	return view('frontend.room');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', [ArticleController::class, 'index']);
Route::get('/', 'ArticleController@index');

// Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles', 'ArticleController@index');

Route::get('/articles/detail', function () {
	return 'Article Detail';
}) ->name('article.detail');

// Route::get('articles/detail/{id}', [ArticleController::class, 'detail']);
Route::get('articles/detail/{id}', 'ArticleController@detail');

Route::get('/articles/more', function() {
	// return redirect('/articles/detail');
	return redirect()->route('article.detail');
});

Route::get('/products', 'ProductContoller@index');

Route::get('/articles/add', 'ArticleController@add');
Route::post('/articles/add', 'ArticleController@create');
Route::get('/articles/delete/{id}', 'ArticleController@delete');


Route::get('/comments/delete/{id}', 'CommentController@delete');
Route::post('/comments/add', 'CommentController@create');







