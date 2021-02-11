<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', [
    'uses' => 'App\Http\Controllers\UserController@getIndex',
    'as' => 'users.index'
]);

Route::get('readmore/{id}',[
    'uses' => 'App\Http\Controllers\UserController@getBook',
    'as' => 'users.readmore'
]);

Route::get('readmore/{id}/like',[
    'uses' => 'App\Http\Controllers\UserController@getLikeBook',
    'as' => 'users.readmore.like'
]);
    
Route::get('login', function()
    {
        return view('admin.login');
    })->name('admin.login');

    Route::get('signup', function()
    {
        return view('admin.signup');
    })->name('admin.signup');

Route::group(['prefix' => 'admin'], function(){
    Route::get('', [
        'uses' => 'App\Http\Controllers\UserController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    

    Route::get('create', [
        'uses' => 'App\Http\Controllers\UserController@getAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::post('create',[
        'uses' => 'App\Http\Controllers\UserController@bookAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::get('edit/{id}',[
        'uses' => 'App\Http\Controllers\UserController@getAdminEdit',
        'as' => 'admin.edit'
    ]);
    Route::get('delete/{id}',[
        'uses' => 'App\Http\Controllers\UserController@getAdminDelete',
        'as' => 'admin.delete'
    ]);
  

    Route::post('edit', [
        'uses' => 'App\Http\Controllers\UserController@bookAdminUpdate',
        'as' => 'admin.update'
    ]);

});

