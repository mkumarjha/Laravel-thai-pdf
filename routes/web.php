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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('testpdf',"HomeController@testPdf");

//Route::post('language-chooser','LanguageController@changeLanguage');

Route::post('language',['before'=>'csrf','as'=>'language-chooser','uses'=>'LanguageController@changeLanguage']);
