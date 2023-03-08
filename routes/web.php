<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/login', 'App\Http\Controllers\HomeController@login')->name('login');
Route::post('/authenticateUser', 'App\Http\Controllers\HomeController@authenticateUser')->name('authenticateUser');
Route::get('/register', 'App\Http\Controllers\HomeController@register')->name('register');
Route::post('/registerUser', 'App\Http\Controllers\HomeController@registerUser')->name('registerUser');
Route::get('/logout', 'App\Http\Controllers\HomeController@logout')->name('logout');

Route::get('/selectLanguage', 'App\Http\Controllers\HomeController@selectLanguage')->name('selectLanguage');
Route::get('/selectLevel', 'App\Http\Controllers\HomeController@selectLevel')->name('selectLevel');
Route::get('/begin', 'App\Http\Controllers\HomeController@begin')->name('begin');
Route::get('/ready', 'App\Http\Controllers\HomeController@ready')->name('ready');

Route::prefix('user')->middleware(['auth'])->group(function () {
    Route::get('/', 'App\Http\Controllers\UserController@dashboard')->name('userDashboard');
    Route::get('/learn', 'App\Http\Controllers\UserController@learn')->name('userLearn');
    Route::get('/achievements', 'App\Http\Controllers\UserController@achievements')->name('userAchievements');
    Route::get('/settings', 'App\Http\Controllers\UserController@settings')->name('userSettings');
    Route::get('/help', 'App\Http\Controllers\UserController@help')->name('userHelp');
});

?>