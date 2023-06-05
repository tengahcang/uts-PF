<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UnitController;
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

Route::get('home', function () {return view('home',['pagetitle'=>'home']);})->name('home');
route::redirect('/', '/home');
route::get('about', AboutController::class)->name('about');
route::resource('/barang',ItemController::class);
route::resource('unit',UnitController::class);