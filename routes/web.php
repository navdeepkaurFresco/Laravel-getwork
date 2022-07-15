<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SuperAdminController;
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

Route::get('/', [AuthController::class,'index']);
// Route::post('/login',[AuthController::class,'login']);
Route::post('login', [AuthController::class,'login']);
Route::get('admin-dashboard',[SuperAdminController::class,'index']);
Route::get('add-subscriber',[SuperAdminController::class,'addSubscriber']);
