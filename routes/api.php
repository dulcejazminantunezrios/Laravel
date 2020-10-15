<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CommentsController;
use app\Http\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!

*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    Route::get('todo_c','ComentariosController@todo_comments');
    Route::get('nuevo_c','ComentariosController@create_comments');
    Route::get('borrar_c','ComentariosController@delete_c');
    Route::get('todo_p','ProductsController@todo_products');
    Route::get('nuevo_p','ProductsController@create_product');
    Route::get('borrar_p','ProductsController@delete_p');
});
