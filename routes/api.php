<?php

use App\Http\Controllers\Api\BarangController2;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\userController;
use App\Http\Controllers\Api\kategoriController;
use App\Http\Controllers\Api\KategoriController2;
use App\Models\KategoriModel;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register',App\Http\Controllers\Api\RegisterController::class)->name('register');

Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::get('levels',[LevelController::class,'index']);
Route::post('levels',[LevelController::class,'store']);
Route::get('levels/{level}',[LevelController::class,'show']);
Route::put('levels/{level}',[LevelController::class,'update']);
Route::delete('levels/{level}',[LevelController::class,'destroy']);

Route::get('user',[userController::class,'index']);
Route::post('user',[userController::class,'store']);
Route::get('user/{user}',[userController::class,'show']);
Route::put('user/{user}',[userController::class,'update']);
Route::delete('user/{user}',[userController::class,'destroy']);

Route::get('kategori',[KategoriController2::class,'index']);
Route::post('kategori',[KategoriController2::class,'store']);
Route::get('kategori/{kategori}',[KategoriController2::class,'show']);
Route::put('kategori/{kategori}',[KategoriController2::class,'update']);
Route::delete('kategori/{kategori}',[KategoriController2::class,'destroy']);

Route::get('barang',[BarangController2::class,'index']);
Route::post('barang',[BarangController2::class,'store']);
Route::get('barang/{barang}',[BarangController2::class,'show']);
Route::put('barang/{barang}',[BarangController2::class,'update']);
Route::delete('barang/{barang}',[BarangController2::class,'destroy']);