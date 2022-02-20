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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes(['register' => false, 'reset' => false]);

Route::middleware('auth')->prefix('admin')->namespace('Admin')->group(function() {
    Route::get('roles', 'RolesController@index')->name('admin.roles.index');
    Route::get('roles/create', 'RolesController@create')->name('admin.roles.create');
    Route::post('roles', 'RolesController@store')->name('admin.roles.store');
    Route::get('roles/{id}/edit', 'RolesController@edit')->name('admin.roles.edit');
    Route::patch('roles/{id}', 'RolesController@update')->name('admin.roles.update');

    Route::get('permissions', 'PermissionsController@index')->name('admin.permissions.index');
    Route::get('permissions/create', 'PermissionsController@create')->name('admin.permissions.create');
    Route::post('permissions', 'PermissionsController@store')->name('admin.permissions.store');
    Route::get('permissions/{id}/edit', 'PermissionsController@edit')->name('admin.permissions.edit');
    Route::patch('permission/{id}', 'PermissionsController@update')->name('admin.permissions.update');
    Route::delete('permision/{id}', 'PermissionsController@destroy')->name('admin.permissions.delete');

    Route::get('user', 'UsersController@index')->name('admin.users.index');
    Route::get('user/assign/{id}', 'UsersController@assignUser')->name('admin.roles.assign');
    Route::post('user/store', 'UsersController@storeAssignUser')->name('admin.roles.store.assign');
    

});

Route::get('/home', 'HomeController@index')->name('home');
