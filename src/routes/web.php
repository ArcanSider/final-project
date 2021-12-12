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

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/contactus', 'App\Http\Controllers\MainController@contactus');

Route::get('/comment', 'App\Http\Controllers\MainController@comment')->name('comment');

Route::post('/comment/check', 'App\Http\Controllers\MainController@comment_check');



//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'ID: '. $id. 'Name: '. $name;
//});
