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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/enroll', 'NewEnrolleesController@enroll');
Route::get('/showenrollees', 'NewEnrolleesController@index');
Route::get('/showenrollees/{$personalinfo}/edit', 'NewEnrolleesController@edit');

Route::resource('personalinfos', 'NewEnrolleesController');

// Route::get('/home', function(){
//     return view('');
// });

// Route::get('/about', function(){
//     return view('pages.about');
// });

// Route::get('/users/{id}', function(){
//     return view('pages.about');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
