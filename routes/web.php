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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
})->name('logout');//Переход в окно авторизации пользователя в системе

Route::get('/', 'HomeController@index')->name('homePage');//Домашняя страница
Route::get('/auth', 'AuthController@index')->name('authorization');//Авторизация
Route::get('/unit/{id}', 'UnitController@index')->name('view-unit');//Пользователь в системе
Route::get('unit/{id}/table', 'UnitController@table')->name('view-unit-table');//Таблиа компонентов остатков обнволения поставщика
Route::get('unit/{id}/xml/table', 'UnitController@xmltable')->name('view-unit-table-xml');

Route::get('/about','HomeController@about')->name('about-info'); //О программе

Route::get('/watchunit', 'UnitController@watch')->name('watch-unit');//CRUD панель поставщиков
Route::get('/watchunit/{id}/delete', 'UnitController@delete')->name('watch-unit-delete');//Удаление постовшика
Route::get('/watchunit/{id}/update','UnitController@findOneUnit')->name('watch-unit-update');//Форма обновления поставщика

Route::post('/watchunit/submit', 'UnitController@submit')->name('watch-unit-submit');// Создание новго посставщика
Route::post('/watchunit/{id}/update', 'UnitController@updateSubmit')->name('watch-unit-update-submit');//Обновление данных поставщика

Route::get('/watchunit/add', function(){
    return view('/includes/unit/formAdd');
})->name('watch-unit-add');//Форма добавление новго поставщика

Route::get('/user/watch', 'UserController@index')->name('user-watch');//Панель просмотра пользователей
Route::get('/user/{id}/delate', 'UserController@delete')->name('user-watch-delete');//Удаление пользователя в системе