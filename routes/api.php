<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => ['api','ceckedPassword','changeLanguage']], function () {
    Route::post('get-main-categorey', 'CategoreiesController@getCategorey');
    Route::post('get-main-categorey-byId', 'CategoreiesController@getCategoreyById');
    Route::post('change-category-status', 'CategoreiesController@changeStatus');



});
