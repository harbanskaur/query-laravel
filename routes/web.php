<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\IndexController;
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
Route::get('/show',[MainController::class,'show']);
Route::get('/showsingle/{id}',[MainController::class,'showsingle'])->name('hello');
Route::get('/particular',[MainController::class,'particular']);
Route::get('/add',[MainController::class,'add']);
Route::get('/update',[MainController::class,'update']);
Route::get('/delete/{id}',[MainController::class,'delete'])->name('delete');

Route::get('/display',[IndexController::class,'display'])->name('display');
Route::post('/insert',[IndexController::class,'insert'])->name('insert');
Route::get('/view',[IndexController::class,'view'])->name('view');
Route::get('/edit/{id}',[IndexController::class,'showdata'])->name('edit');

Route::post('/update/{id}',[IndexController::class,'update'])->name('update');
Route::get('/deletedata/{id}',[IndexController::class,'deletedata'])->name('data');
