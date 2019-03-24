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
    $destinationFolder = "Personal_image";
    dd(public_path("uploads/{$destinationFolder}/"));

});

Route::get('/', function () {
    return view('welcome');
})->name('form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'SearchController@index')->name('search')->middleware('auth');
Route::get('/result', 'SearchController@searchResultFull')->name('form_full')->middleware('auth');

Route::post('/login-custom', 'LoginCustomController@authenticate')->name('login_custom');

Route::post('/form-submit', 'FormSubmitController@submit')->name('form_submit');
