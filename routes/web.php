<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\DashboardController;

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




Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'adminlogin'])->name('admin.login');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/chating',[HomeControler::class,'indexchat'])->name('index.chat');
    Route::get('/message/{id}',[HomeControler::class,'indexmessage'])->name('index.message');
    Route::post('/home',[HomeControler::class,'storemessage'])->name('store.message');
    
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('profle-update',[AuthController::class,'profileupdate'])->name('profle.update');
    Route::post('profle-update',[AuthController::class,'passwordupdate'])->name('password.update');
});