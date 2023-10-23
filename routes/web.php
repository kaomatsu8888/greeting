<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController; // 追加

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/comments/{timeOfDay}', [MessageController::class, 'greeting']);    //あいさつ
Route::get('/comments/freeword/{word}', [MessageController::class, 'freeword']);    //自由なメッセージ
Route::get('/comments/random', [MessageController::class, 'random']);   //ランダムなメッセージ
