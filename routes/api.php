<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/chart' , [App\Http\Controllers\ChartController::class, 'chart'])->name('chart');




























Route::resource('posts', App\Http\Controllers\API\PostAPIController::class);


Route::resource('categories', App\Http\Controllers\API\CategoryAPIController::class);


Route::resource('tags', App\Http\Controllers\API\TagAPIController::class);


Route::resource('comments', App\Http\Controllers\API\CommentAPIController::class);




Route::resource('works', App\Http\Controllers\API\WorkAPIController::class);
