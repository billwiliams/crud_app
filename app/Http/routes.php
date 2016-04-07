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
Route::get('login','PagesController@login')->name('login');
Route::get('register',"PagesController@register")->name('register');
Route::get('contacts',"PagesController@contacts")->name('contacts');
Route::get('feedback',"PagesController@feedback")->name('feedback');
Route::post('contacts',"PagesController@storeContacts")->name('contacts_store');

Route::post('register', 'PagesController@store');

Route::post('login', 'PagesController@postLogin');

