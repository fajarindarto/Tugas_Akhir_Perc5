<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MasyarakatController;
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

Route::get('/',"App\Http\Controllers\MasyarakatController@index") ;
Route::get('/edit/{id}',"App\Http\Controllers\MasyarakatController@edit") ;
Route::get('/show/{id}',"App\Http\Controllers\MasyarakatController@show") ;
Route::get('/create',"App\Http\Controllers\MasyarakatController@create") ;
Route::post('/store',"App\Http\Controllers\MasyarakatController@store") ;
Route::post('/update/{id}',"App\Http\Controllers\MasyarakatController@update") ;
Route::post('delete/{id}', "App\Http\Controllers\MasyarakatController@destroy");
