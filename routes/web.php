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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('search', [SearchController::class, 'index'])->name('search');
Route::get('/search','SearchController@index');
Route::get('autocomplete','SearchController@autocomplete')->name('autocomplete');
Route::get('/get-students','SearchController@getStudents');
// Route::get('autocomplete', [SearchController::class, 'autocomplete'])->name('autocomplete');
