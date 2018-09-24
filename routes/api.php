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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get('companies', 'CompaniesController@index');

Route::get('companies/{company}', 'CompaniesController@show');

Route::post('companies','CompaniesController@store');

Route::put('companies/{company}','CompaniesController@update');

Route::delete('companies/{company}', 'CompaniesController@delete');


Route::get('users', 'UsersController@index');

Route::get('users/{user}', 'UsersController@show');

Route::post('users','UsersController@store');

Route::put('users/{user}','UsersController@update');

Route::delete('users/{user}', 'UsersController@delete');