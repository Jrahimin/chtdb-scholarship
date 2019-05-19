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

Route::get('/test',function (){
    //
});

Route::get('/', function () {
    return view('welcome');
})->name('form');

Auth::routes();

Route::get('/search', 'SearchController@index')->name('search')->middleware('auth');
Route::get('/result', 'SearchController@searchResult')->name('search_result')->middleware('auth');

Route::post('/login-custom', 'LoginCustomController@authenticate')->name('login_custom');

Route::post('/form-submit', 'FormSubmitController@submit')->name('form_submit');
