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
    'teams'=>'TeamController',
    'places'=>'PlaceController',
    'events'=>'EventController',
    'slots'=>'SlottController',
    'calendars'=>'CalendarController',
    'time-units'=>'TimeUnitController',
'appointments'=>'AppointmentController',
]);

Route::any('/', 'SocialAuthController@redirect');
