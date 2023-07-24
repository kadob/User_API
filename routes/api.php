<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::post('/user', [UserController::class,'register']);//ユーザーの新規登録
Route::get('/user/{user}', [UserController::class,'fetch']);//ユーザーの取得
Route::put('/user/{user}', [UserController::class,'update']);//ユーザーの更新
Route::delete('/user/{user}', [UserController::class,'delete']);//ユーザーの削除