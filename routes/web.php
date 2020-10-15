<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CommentsController;
use app\Http\Controllers\ProductsController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    Route::get('todo_c','CommentsController@todo_comments');
    Route::get('nuevo_c','CommentsController@create_comments');
    Route::get('borrar_c','CommentsController@delete_c');
    Route::get('todo_p','ProductsController@todo_products');
    Route::get('nuevo_p','ProductsController@create_product');
    Route::get('borrar_p','CommentsController@delete_p');
});