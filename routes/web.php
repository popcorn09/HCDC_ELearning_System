<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers;

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

Route::controller(Controllers::class)->group(function () {
    Route::get('/', 'userLogin');
    Route::get('userdesktop', 'userDesktop');
    Route::get('homepage', 'homePage');
    Route::get('exercises', 'exercises');
    Route::get('quiz', 'quiz');
    Route::get('results', 'results');
    Route::post('recordscore', 'recordScore');
});