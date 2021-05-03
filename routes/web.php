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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', 'HomeController@index');
Route::get('/', 'QuestionController@index');
Route::post('/submit', 'QuestionController@store');
// Route::get('/merci', 'QuestionController@admin');
Route::get('/dashborad', 'QuestionController@admin');
Route::get('/export', 'QuestionController@exportCsv');

// Route::get('export', 'DemoController@export')->name('export');
