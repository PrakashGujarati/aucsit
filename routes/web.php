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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/horizontal', function(){
	return view('layouts.horizontal.app');
});

Route::get('/patient', function(){
	return view('patient.view');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('case','CaseController@index')->name('table');
Route::get('form','HomeController@form')->name('form');
Route::post('store/case','CaseController@store')->name('store.case');
Route::get('edit/case/{id}','CaseController@edit')->name('edit.case');
Route::get('delete/case/{id}','CaseController@delete')->name('delete.case');
Route::post('update/case','CaseController@update')->name('update.case');
Route::get('add/case','CaseController@create')->name('add.case');