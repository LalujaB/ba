<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;


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



Route::middleware('api')->get('/contacts', 'ContactController@index');

Route::middleware('api')->post('/contacts', 'ContactController@index');