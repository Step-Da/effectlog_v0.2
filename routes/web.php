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

use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('homePage');
Route::get('/auth', 'AuthController@index')->name('authorization');
Route::get('/unit/{id}', 'UnitController@index')->name('view-unit');

// Route::get('/dd/{list}', 'Ajax\BuilderController@index');
// Route::get('/dd', 'Ajax\BuilderController@index');