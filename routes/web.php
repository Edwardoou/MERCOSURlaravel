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
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();
Route::resource('comercial', 'ComercialController');


Auth::routes();
Route::resource('diplomatica', 'DiplomaticaController');

Auth::routes();
Route::resource('paisE', 'PaisEController');

Auth::routes();
Route::resource('paisM', 'PaisMController');

Route::delete('/paisE/delete/{id}', 'PaisEController@delete')->name('paisE.delete');

Auth::routes();
Route::get('/moders',[App\Http\Controllers\ModersController::class, 'moders'])->name('moders');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users',[App\Http\Controllers\UsersController::class, 'users'])->name('users');

Auth::routes();
Route::resource('usuarios', 'UserController');