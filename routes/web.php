<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/index', [userController::class, 'index']);
Route::get('/index/create', [userController::class, 'create']);
Route::post('/index', [userController::class, 'store']);
Route::get('/index/{id}', [userController::class, 'show']);
Route::delete('/index/{id}', [userController::class, 'destroy']);
