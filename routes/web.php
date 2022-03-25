<?php
use App\Http\Controllers\TodoController;
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

Route::get('/', 'App\Http\Controllers\TodoController@index')->name('Todo');

Route::post('/', 'App\Http\Controllers\TodoController@store')->name('Todo');

Route::get('/', 'App\Http\Controllers\TodoController@show')->name('Todo');
