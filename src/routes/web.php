<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

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

Route::get('/author/{author}', [AuthorController::class, 'bind']);
Route::get('/', [AuthorController::class, 'index']);
Route::get('/find',[AuthorController::class,'find']);
Route::post('/find',[AuthorController::class,'search']);
Route::get('/add',[AuthorController::class,'add']);
Route::post('/add',[AuthorController::class,'create']);
Route::post('/edit',[AuthorController::class,'update']);
Route::get('/edit',[AuthorController::class,'edit']);
Route::get('/delete',[AuthorController::class,'delete']);
Route::post('/delete',[AuthorController::class,'remove']);