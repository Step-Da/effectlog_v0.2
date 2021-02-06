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
Route::get('/about','HomeController@about')->name('about-info');

Route::get('/watchunit', 'UnitController@watch')->name('watch-unit');
Route::get('/watchunit/{id}/delete', 'UnitController@delete')->name('watch-unit-delete');
Route::get('/watchunit/{id}/update','UnitController@findOneUnit')->name('watch-unit-update');

Route::post('/watchunit/submit', 'UnitController@submit')->name('watch-unit-submit');
Route::post('/watchunit/{id}/update', 'UnitController@updateSubmit')->name('watch-unit-update-submit');

Route::get('/watchunit/add', function(){
    return view('/includes/unit/formAdd');
})->name('watch-unit-add');




// Route::get('/dd/{list}', 'Ajax\BuilderController@index');
// Route::get('/dd', 'Ajax\BuilderController@index');