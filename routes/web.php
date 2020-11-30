<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/holiday','CalendarController@getHoliday');
Route::post('/holiday','CalendarController@postHoliday');
Route::get('/','CalendarController@index');
Route::get('/holiday/{id}','CalendarController@getHolidayId');
Route::delete('/holiday','CalendarController@deleteHoliday');