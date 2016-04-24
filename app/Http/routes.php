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

Route::get('/', 'BookController@index');

Route::get('/scrape', 'ScrapeController@index');
Route::post('/scrape/process', 'ScrapeController@process');

Route::get('/book', 'BookController@index');

Route::get('api/skill/{skill}', 'ApiController@skill');

Route::resource('api', 'ApiController',
                ['except' => ['create', 'edit']]);