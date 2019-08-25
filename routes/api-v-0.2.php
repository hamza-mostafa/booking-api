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


Route::middleware('auth:api')->get('/user', static function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'calendars'=>'CalendarController',
    'time-units'=>'TimeUnitController',
    'teams'=>'TeamController',
]);

Route::any('/home', function (Request $request){
   return $request;
});
