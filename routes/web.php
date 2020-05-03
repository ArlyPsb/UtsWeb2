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
Route::get('Profile',function(){return view('Profile');});
Route::get('inputnama', 'NamaController@created');
Route::get('savecreate', 'NamaController@savecreate');
Route::get('daftarnama', 'NamaController@read');
Route::get('editnama/(id)', 'NamaController@update');