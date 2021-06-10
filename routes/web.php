<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FileUplodeController;

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

// Route::get('FileUplode', 'FileUplodeController@index');

// Route::post('uplode', 'FileUplodeController@uplode');

// Route::get('mail','EmailController@mail');  

// Route::post('email', 'EmailController@email');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('user', 'UserController@user');

// Route::get('insert', 'UsersController@insert');

// Route::post('insertpost', 'UsersController@insertpost')->name('insertpost');

// Route::get('view', 'UsersController@fetch');

// Route::get('edit/{id}', 'UsersController@edit');

// Route::post('update', 'UsersController@update')->name('updatepost');

// Route::get('delete/{id}', 'UsersController@delete');

// Route::post('store/{id?}', 'UsersController@UpdateorInsert')->name('store');


Route::get('index','UserContoller@index');

Route::get('user','UserContoller@user');

Route::get('inuser','UserContoller@inverseUser');

Route::get('inproduct','UserContoller@inverseProduct');

Route::get('product','UserContoller@product');

Route::get('hasmany','UserContoller@HasMany');


