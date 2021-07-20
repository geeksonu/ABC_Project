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

/* route details */
Route::get('/', function () {
    return view('superadmin.index');
});


// Super Admin Routes

Route::get('superadmin/index', 'App\Http\Controllers\SuperAdminPortal\SuperAdminController@index')->name('index');

Route::get('superadmin/superadmin-admin', 'App\Http\Controllers\SuperAdminPortal\AdminController@index')->name('index');

Route::get('superadmin/superadmin-salesmanager', 'App\Http\Controllers\SuperAdminPortal\SalesManagerController@index')->name('index');

Route::get('superadmin/superadmin-operationmanager', 'App\Http\Controllers\SuperAdminPortal\OperationManagerController@index')->name('index');


Route::post('superadmin/save-admin', 'App\Http\Controllers\SuperAdminPortal\AdminController@store'); // Create Admin

Route::delete('superadmin/delete-admin/{id}', 'App\Http\Controllers\SuperAdminPortal\AdminController@destroy'); //Delete Admin

Route::get('superadmin/edit-admin', 'App\Http\Controllers\SuperAdminPortal\AdminController@edit_admin'); // Edit Admin

Route::post('superadmin/update-admin','App\Http\Controllers\SuperAdminPortal\AdminController@update_admin'); //Update Admin