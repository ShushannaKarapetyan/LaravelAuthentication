<?php

auth()->loginUsingId(3);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reports', function () {
    return 'The secret reports.';
})->middleware('can:view_reports');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/contact','ContactController@show');
Route::post('/contact','ContactController@store')->name('contact.store');

Route::get('/payments/create','PaymentsController@create')->middleware('auth');
Route::post('/payments','PaymentsController@store')->middleware('auth');

Route::get('notifications','UserNotificationsController@show')->middleware('auth');


//Authorizations Routes

Route::get('/conversations','ConversationsController@index');
Route::get('/conversations/{conversation}','ConversationsController@show')->name('conversation.show')->middleware('can:view,conversation');


Route::post('/best-replies/{reply}','ConversationBestReplyController@store');
