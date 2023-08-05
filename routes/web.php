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

Route::get('/',[MainController::class,'index'])->name('/');
Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/services_single',[MainController::class,'services_single'])->name('services_single');
Route::get('/404',[MainController::class,'not_found'])->name('not_found');
Route::get('/services',[MainController::class,'services'])->name('services');
Route::get('/channelog',[MainController::class,'channelog'])->name('channelog');
Route::get('/password',[MainController::class,'password'])->name('password');
Route::get('/contact',[MainController::class,'contact'])->name('contact');
Route::get('/pricing',[MainController::class,'pricing'])->name('pricing');
Route::get('/team',[MainController::class,'team'])->name('team');
Route::get('/project_details',[MainController::class,'project_details'])->name('project_details');
Route::get('/faq',[MainController::class,'faq'])->name('faq');
Route::get('/blog',[MainController::class,'blog'])->name('blog');
Route::get('/project',[MainController::class,'project'])->name('project');
Route::get('/team_single',[MainController::class,'team_single'])->name('team_single');
Route::get('/blog_details',[MainController::class,'blog_details'])->name('blog_details');
