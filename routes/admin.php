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
Route::group(['namespace'=>'Admin','middleware' => 'auth:admin'], function() {

    Route::get('logout', 'LoginController@logout')->name('admin.logout');

    Route::get('/', 'DashboardController@index')->name('admin.dashboard');


    /* ############## Begin Admins  Routes ################ */
    Route::group(['prefix' => 'admins'], function (){
        //Route::get('/','AdminsController@index')->name('admin.admins');


    });
    /* ############### End Admins  Routes ################# */

});


Route::group(['namespace'=>'Admin','middleware' => 'guest:admin'], function(){
    Route::get('login' ,'LoginController@getLogin')-> name('get.admin.login');
    Route::post('login' ,'LoginController@login') -> name('admin.login');
});
