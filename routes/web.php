<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendHomeController;
use App\Http\Controllers\FrontendLoginController;






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

Route::get('/',[FrontendHomeController::class,'index']);
Route::get('/login',[FrontendLoginController::class,'index']);
Route::get('/privacy-policy',[FrontendHomeController::class,'privacyPolicy']);



