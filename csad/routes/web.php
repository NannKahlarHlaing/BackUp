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

// Route::get('/', function () {
//     return view('template');
// });

Route::get('/','Auth\AdminLoginController@showLoginForm');
Route::post('/admin-login','Auth\AdminLoginController@login');
Route::get('/backend','AdminController@index');
Auth::routes();
Route::get('/registeruser', 'Auth\AdminLoginController@register');
Route::post('/registeruser', 'Auth\AdminLoginController@registeruser');
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
// Route::post('/time', 'OrdersController@index');

//connection
Route::get('/addconnection', 'ConnectionController@create');
Route::get('/connection', 'ConnectionController@index');
Route::get('/editconnection/{connection}', 'ConnectionController@edit');
Route::post('/updateconnection', 'ConnectionController@update');

Route::post('/storeconnect','ConnectionController@store');

//field mapping
Route::post('/savetemplate', 'MappingController@store');
Route::get('/setfields', 'MappingController@create');
Route::get('/mapping', 'MappingController@setdefault');
// Route::get('/mapping', 'MappingController@setdefault');
// Route::get('/setdefault/{template_id}', 'MappingController@setdefault');
Route::get('/setdefault/{template_id}', 'TemplateController@setdefault');
Route::get('/editfield/{template_id}', 'MappingController@edit');
Route::post('/update', 'MappingController@update');

// templae
// Route::get('edittemplate/{template}', 'TemplateController@edit');
Route::get('edittemplate/{template}', 'MappingController@edit');
Route::post('/updatetemplate', 'TemplateController@update');
Route::get('/deletetemplate/{template}', 'TemplateController@destroy');

//report
Route::get('/report', 'ReportController@create');

//orders
Route::get('/getorder', 'OrdersController@store');
Route::get('/orders', 'OrdersController@index');

//adams
// Route::get('/sendorder' , 'OrdersController@create');

Route::get('/sendorder' , 'AdamsController@show');
Route::get('/test', 'AdamsController@index');

//task scheduler
Route::post('/schedule', 'TaskController@update');

