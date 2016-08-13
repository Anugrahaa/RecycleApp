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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodegradable', function () {
	return view('decomposable');
});

Route::post('/biodegradable/rgsubmit','whichdustbinController@checkDB');

Route::get('/biodegradable/checkmaterial/{object}/{material}', ['uses' => 'whichdustbinController@checkMaterial']);


Route::get('/location', function () {
	return view('discard');
});

