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

Route::get('/','ctfController@index');
/*
ctf
*/
Route::get('challenges','ctfController@challenges');
Route::get('scoreboard','ctfController@score');
Route::post('flag/submit','ctfController@submitflag');
/*
admin
*/
Route::get('ctfadmin/task','adminController@seetask');
Route::any('ctfadmin/task/add','adminController@addtask');
Route::get('ctfadmin/home','adminController@index');
Route::any('ctfadmin/task/hint','adminController@hintadd');
Route::get('ctfadmin/task/delete/{id}','adminController@delete')->where('id','[0-9]+');

Auth::routes();

Route::get('/home', 'ctfController@index');
Route::get('/about','ctfController@about');
