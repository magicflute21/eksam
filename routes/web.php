<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('frontpage');
// });

Route::get('/', 'FrontpageController@index');

Route::view('/details', 'pages.details');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'ProductController@index')->name('admin');
Route::post('/admin', 'ProductController@store');
Route::delete('/admin', 'ProductController@destroy');



Route::get('/feedback', 'FeedbackController@index');
Route::post('/feedback', 'FeedbackController@store');




