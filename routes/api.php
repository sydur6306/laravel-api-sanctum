<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('products','App\Http\Controllers\ProductController');
Route::get('products/search/{name}',[App\Http\Controllers\ProductController::class,'search']);
//Route::get('/products',[\App\Http\Controllers\ProductController::class,'index']);
//Route::post('/products',[\App\Http\Controllers\ProductController::class,'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
