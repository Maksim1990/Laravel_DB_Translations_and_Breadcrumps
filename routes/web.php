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

Auth::routes();

Route::group(['prefix'=>'{lang}'], function (){
    Route::get('/', function ($lang) {
        App::setLocale($lang);

        return view('welcome');
    });



    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/translate', 'HomeController@translate')->name('translate');
    Route::get('/translate/update', 'HomeController@translateUpdate')->name('translate_update');
    Route::get('/translate/delete', 'HomeController@translateDelete')->name('translate_delete');
    Route::get('/translate/create', 'HomeController@translateCreate')->name('translate_create');



});







