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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kalyacontact', 'ContactCtrl@index');

Route::post('kalyacontact', 'ContactCtrl@contact');

Route::get('newblog', 'BlogCtrl@index');

Route::post('newblog', 'BlogCtrl@postCreate');

Route::get('kalyablogs', 'BlogCtrl@show');

Route::get('/viewblog/{id}', array('as'=>'viewblog', 'uses'=>'BlogCtrl@showblog'));

Route::post('subscribe', 'SubCtrl@Subscribe');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
