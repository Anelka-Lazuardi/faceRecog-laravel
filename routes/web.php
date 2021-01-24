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

Route::get('/', 'PersonsController@index');
Route::get('/person', 'PersonsController@person')->name('person');
Route::get('/newPerson', 'PersonsController@create')->name('newPerson');
Route::post('/createPerson', 'PersonsController@save')->name('createPerson');
Route::get('/newImage/{persons:id}', 'PersonsController@newImage');
Route::get('/listImage/{persons:id}', 'PersonsController@listImage');
Route::post('/addImage', 'PersonImagesController@index')->name('addImage');
Route::post('/getPerson', 'PersonsController@getPerson');
