<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PlanetsController;
use App\Http\Controllers\SpeciesController;

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
Route::get('/people', 'App\Http\Controllers\PeopleController@people');

Route::get('/planets', 'App\Http\Controllers\PlanetsController@planets');

Route::get('/species', 'App\Http\Controllers\SpeciesController@species');


