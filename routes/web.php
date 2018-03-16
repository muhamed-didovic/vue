<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/modal', 'HomeController@modal');
Route::get('/todo', 'HomeController@todo');
Route::get('/tabs', 'HomeController@tabs');
Route::get('/coupon', 'HomeController@coupon');
Route::get('/slots', 'HomeController@slots');
Route::get('/inline_templates', 'HomeController@inline_templates');

Route::get('/forms', 'HomeController@forms');
Route::post('/forms', 'HomeController@forms');

Route::get('projects', 'ProjectsController@create');
//Route::post('projects', 'ProjectsController@store');

Route::get('schema_forms', 'HomeController@schemaForms');

Route::get('/shared', 'HomeController@shared');
