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

Route::get('/test', function () {
    echo "salam.";
});

// Route::get( '/ali' , "App\Http\Controllers\UsersController@test" );


Route::get('/ali',"App\Http\Controllers\UsersController@tt")->middleware("AuthMiddleware");


Route::group(['middleware'=>'AuthMiddleware'],function(){

    Route::get('/Habib',"App\Http\Controllers\UsersController@Habib");
    
    Route::post('/sabtb',"App\Http\Controllers\UsersController@sabtnam");

});

Route::get('/sabtb',"App\Http\Controllers\UsersController@sabtnam");

Route::get('/testdb',"App\Http\Controllers\UsersController@testdb")->middleware("testdb");


Route::get('/welcome',"App\Http\Controllers\UsersController@wel");
Route::post('/welcome',"App\Http\Controllers\UsersController@wel");

Route::get('index',"App\Http\Controllers\UsersController@index")->name('index');
Route::get('contact',"App\Http\Controllers\UsersController@contact")->name('contact');

