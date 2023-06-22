<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\KontakController;

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
})->name('login');

Route::post('user/Auth',[UserController::class,'Auth']);
Route::get('user/logout',[UserController::class,'logout']);

route::get('home',[HomeController::class,'show']);

route::get('profil',[ProfilController::class,'show'])->middleware('auth');  
Route::post('profil/create',[ProfilController::class,'create']);
Route::get('profil/edit/{id}',[ProfilController::class,'edit']);
Route::post('profil/update/{id}',[ProfilController::class,'update']); 

route::get('project',[ProjectController::class,'show']);
route::get('project/add',[ProjectController::class,'add']);
route::post('project/create',[ProjectController::class,'create']);
route::get('project/edit/{id}',[ProjectController::class,'edit']);
Route::get('project/hapus/{id}',[ProjectController::class,'hapus']);
route::post('project/update/{id}',[ProjectController::class,'update']);
route::get('project/portopolio/{id}',[ProjectController::class,'portopolio']);
  
route::get('user',[UserController::class,'show']);
Route::get('user/add',[UserController::class,'add']);
Route::get('user/register',[UserController::class,'register']);
Route::post('user/create',[UserController::class,'create']);
Route::get('user/hapus/{id}',[UserController::class,'hapus']);
Route::get('user/edit/{id}',[UserController::class,'edit']);
Route::post('user/update/{id}',[UserController::class,'update']);
Route::get('cariuser',[UserController::class,'search']);

route::get('kontak',[KontakController::class,'show']);
route::get('kontak/add',[KontakController::class,'add']);
route::post('kontak/create',[KontakController::class,'create']);