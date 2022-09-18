<?php

use App\Http\Controllers\UnityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;
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

Route::get('/hello_world', fn() => view('hello_world'));
Route::get('/hello', fn() => view('hello', [
    'name' => '山田',
    'course' => 'Laravel9'
]));

Route::get('/', fn() => view('index'));
Route::get('/curriculum', fn() => view('curriculum'));
// 世界の時間
Route::get('/world-time', [UnityController::class, 'worldTime']);

// おみくじ
Route::get('/omikuji', [GameController::class, 'omikuji']);

// モンティ・ホール問題
Route::get('/monty-hall', [GameController::class, 'montiHall']);

// リクエスト
Route::get('/form', [RequestSampleController::class, 'form']);
Route::get('/query-strings', [RequestSampleController::class, 'queryStrings']);