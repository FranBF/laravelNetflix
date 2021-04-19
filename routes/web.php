<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('layouts.app');
});


Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Auth::routes();

Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('videos', 'App\Http\Controllers\VideoController');
Route::resource('reports', 'App\Http\Controllers\ReportController');
Route::get('reports/{video}/create', ['uses' => 'App\Http\Controllers\ReportController@create', 'as' => 'reports.create']);


Route::resource('comments', 'App\Http\Controllers\CommentController');
Route::get('comments/{video}/create', ['uses' => 'App\Http\Controllers\CommentController@create', 'as' => 'comments.create']);

Route::resource('puntuations', 'App\Http\Controllers\PuntuationController');
Route::get('puntuation/{video}/create', ['uses' => 'App\Http\Controllers\PuntuationController@create', 'as' => 'puntuation.create']);

Route::get('videos/{id}/destroy', ['uses' => 'App\Http\Controllers\VideoController@destroy', 'as' => 'videos.destroy']);
Route::get('reports/{id}/destroy', ['uses' => 'App\Http\Controllers\ReportController@destroy', 'as' => 'reports.destroy']);
Route::get('users/{id}/destroy', ['uses' => 'App\Http\Controllers\UserController@destroy', 'as' => 'users.destroy']);
