<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/file-import',[UserController::class,'importView'])->name('import-view');
Route::post('/import',[UserController::class,'import'])->name('import');
Route::get('/export-users',[UserController::class,'exportUsers'])->name('export-users');
Route::get('/add-link',[PostController::class,'add'])->name('addLink');
Route::post('/add-link',[PostController::class,'saveLink']);
// Route::get('/add',[PostController::class,'index'])->name('add');
Route::post('/add',[PostController::class,'saveAdd']);
Route::post('/call-cate',[PostController::class,'callCate'])->name('callCate');
