<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Userinformation;
use App\Http\Livewire\Userdetail;
use App\Http\Livewire\Userlist;

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


// Route::get('index','UserContoller@index');

// Route::get('user','UserContoller@user');

// Route::get('inuser','UserContoller@inverseUser');

// Route::get('inproduct','UserContoller@inverseProduct');

// Route::get('product','UserContoller@product');

// Route::get('hasmany','UserContoller@HasMany');

// Route::get('hasmany','HospitalController@hasMany');

// Route::get('claims','HospitalController@claims');

// Route::get('enc','HospitalController@encounters');

// Route::get('index', 'MHospitalController@index');

// Route::get('hospital', 'MHospitalController@Hospital');

// Route::get('first','DemoController@First');

// Route::get('second','DemoController@second');

// Route::get('third','DemoController@third');

// Route::get('fourth','DemoController@fourth');

// Route::get('fifth','DemoController@fifth');

// Route::get('sixth','DemoController@sixth');

// Route::get('seven','DemoController@seven');

Route::get('user', Userinformation::class);

Route::get('userinfo', Userdetail::class);

Route::get('userlist', Userlist::class);


