<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[MainController::class,'index']);
Route::get('/about',[MainController::class,'about']);
Route::get('/services_single',[MainController::class,'services_single']);
Route::get('/404',[MainController::class,'not_found']);
Route::get('/services',[MainController::class,'services']);
Route::get('/channelog',[MainController::class,'channelog']);
Route::get('/password',[MainController::class,'password']);
Route::get('/contact',[MainController::class,'contact']);
Route::get('/pricing',[MainController::class,'pricing']);
Route::get('/team',[MainController::class,'team']);
Route::get('/project_details',[MainController::class,'project_details']);
Route::get('/faq',[MainController::class,'faq']);
Route::get('/blog',[MainController::class,'blog']);
Route::get('/project',[MainController::class,'project']);
Route::get('/team_single',[MainController::class,'team_single']);
