<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index')->name('home');
Route::get('login', 'PagesController@login')->name('login');
Route::get('register', "PagesController@register")->name('register');
Route::get('contacts', "PagesController@contacts")->name('contacts');
Route::get('feedback', "PagesController@feedback")->name('feedback');
Route::get('edit', "PagesController@editPage")->name('edit');
Route::get('reset', "PagesController@reset")->name('reset');
Route::post('reset', "PagesController@postReset")->name('reset');
Route::get('deletecomment/{id}', "PagesController@destroy")->name('deletecomment');
Route::get('updatecomment/{id}', "PagesController@edit")->name('updatecomment');
Route::post('updatecomment/{id}', "PagesController@update")->name('updatecomment');
Route::post('edit', "PagesController@postEdit")->name('edit');
Route::post('contacts', "PagesController@storeContacts")->name('contacts_store');

Route::post('register', 'PagesController@store');

Route::post('login', 'PagesController@postLogin');

