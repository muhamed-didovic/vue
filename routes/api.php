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


Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/projects', 'ProjectsController@projects');
    Route::post('/projects', 'ProjectsController@store');
    Route::delete('/projects/{project}', 'ProjectsController@destory');
    
    Route::get('/statuses', 'StatusesController@index');
    Route::post('/statuses', 'StatusesController@store');
});

Route::get('/{vue_capture?}', function () {
    return view('home');
})->where('vue_capture', '[\/\w\.-]*');