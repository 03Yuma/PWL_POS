<?php

use App\Http\Controllers\Levelcontroller;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\KategoriController as ControllersKategoriController;
use App\Http\Controllers\POScontroller;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/level',[Levelcontroller::class,'index']);
Route::get('/kategori',[kategoriController::class,'index']);
Route::get('/user',[UserController::class,'index']);
Route::get('/user/tambah',[UserController::class,'tambah']);
Route::post('/user/tambah_simpan',[UserController::class,'tambah_simpan']);
Route::get('/user/ubah/{id}',[UserController::class,'ubah']);
Route::put('/user/ubah_simpan/{id}',[UserController::class,'ubah_simpan']);
Route::get('/user/hapus/{id}',[UserController::class,'hapus']);
Route::get('/hello', function () {return view('hello', ['name' => 'Yuma']);  }); 
Route::get('/hello',[WelcomeController::class,'hello']);
Route::get('/kategori',[kategoriController::class,'index']);
Route::get('/kategori/create',[kategoriController::class,'create'])->name('/kategori/create');
Route::post('/kategori',[kategoriController::class,'store']);
Route::get('/kategori/edit{id}', [kategoriController::class, 'edit']);
Route::put('/kategori/edit_simpan/{id}',[kategoriController::class,'edit_simpan']);
Route::get('/kategori/delete/{id}',[kategoriController::class,'delete']);
Route::get('/kategori/create',[KategoriController::class,'create']);
Route::post('/kategori',[kategoriController::class,'store']);
Route::get('/user/create',[userController::class,'create']);
Route::post('/user',[userController::class,'store']);
Route::get('/level/create',[Levelcontroller::class,'create']);
Route::post('/level',[Levelcontroller::class,'store']);
Route::resource('m_user',POScontroller::class);
Route::get('/',[WelcomeController::class,'index']);
Route::group(['prefix'=>'user'],function(){
    Route::get('/',[UserController::class,'index']);
    Route::post('/list',[UserController::class,'list']);
    Route::get('/create',[UserController::class,'create']);
    Route::post('/',[UserController::class,'store']);
    Route::get('/{id}',[UserController::class,'show']);
    Route::get('/{id}/edit', [UserController::class,'edit']);
    Route::put('/{id}', [UserController::class,'update']);
    Route::delete('/{id}',[UserController::class,'destroy']);
});