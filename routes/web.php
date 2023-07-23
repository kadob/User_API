<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () { return view('users/index'); });//登録画面を表示
Route::post('/user', [UserController::class,'register']);//ユーザー登録
Route::get('/user/{user}', [UserController::class,'get']);//詳細画面を表示
Route::get('/user/{user}/edit', [UserController::class,'edit']);//編集画面を表示
Route::put('/user/{user}', [UserController::class,'update']);//ユーザー情報更新
Route::delete('/user/{user}', [UserController::class,'delete']);//ユーザー削除