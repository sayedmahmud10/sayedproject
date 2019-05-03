<?php
use App\Post;
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
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/buy', 'PagesController@buy');
Route::resource('orders','OrderController');


Route::resource('posts','PostsController');
Route::resource('buy1','BuyController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::resource('search','SearchController'); 
   