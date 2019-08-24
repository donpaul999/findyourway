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
    return view('index');
});

Route::get('/fyw', 'WebsiteController@fyw');
Route::get('/about', 'AboutUsController@about');

Route::get('/index', 'AutocompleteController@index');
Route::post('/index/fetch', 'AutocompleteController@fetch')->name('index.fetch');

Route::get('/index', 'LiveSearch@index');
Route::get('/index/action', 'LiveSearch@action')->name('index.action');

Route::get('/index', 'MailController@index');
Route::post('/postMail', 'MailController@post');

?>
