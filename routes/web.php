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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contact','ContactController@show');
Route::post('/contact','ContactController@store')->name('contact.store');

Route::get('/payments/create','PaymentsController@create')->middleware('auth');
Route::post('/payments','PaymentsController@store')->middleware('auth');

Route::get('notifications','UserNotificationsController@show')->middleware('auth');


//Authorizations Routes

Route::get('/conversations','ConversationsController@index');
Route::get('/conversations/{conversation}','ConversationsController@show')->name('conversation.show');


Route::post('/best-replies/{reply}','ConversationBestReplyController@store');
