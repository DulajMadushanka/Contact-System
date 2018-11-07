<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/addContact',[
    'uses'=>'ContactController@addContact'
]);

Route::get('/getContact',[
    'uses'=>'ContactController@getContact'
]);

Route::get('/getContacts/{id}',[
    'uses'=>'ContactController@getContacts'
]);

Route::delete('/deleteContact/{id}',[
    'uses'=>'ContactController@deleteContact'
]);

Route::put('/editContact/{id}',[
    'uses'=>'ContactController@editContact'
]);

