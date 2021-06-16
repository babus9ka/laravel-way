<?php

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



Route::get('/todos', [\App\Http\Controllers\PagesController::class, 'todosPage']);
Route::get('/todos/done', [\App\Http\Controllers\PagesController::class, 'todosDone']);
Route::get('/todos/not/done', [\App\Http\Controllers\PagesController::class, 'todosNotDone']);



