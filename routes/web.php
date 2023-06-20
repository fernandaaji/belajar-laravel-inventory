<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;

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

// Login
route::get('/', [AuthController::class, 'index']);
route::get('/home', [HomeController::class, 'index']);
route::get('/logout', [AuthController::class, 'logout']);

// Data Kategori
route::get('/kategori', [KategoriController::class, 'index']);
route::post('/kategori/store', [KategoriController::class, 'store']);
route::post('/kategori/update/{id}', [KategoriController::class, 'update']);
route::get('/kategori/destroy/{id}', [KategoriController::class, 'destroy']);
