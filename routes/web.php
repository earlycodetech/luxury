<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PagesController::class, "index"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin Room Routes
Route::get('create/room', [RoomsController::class, "create"])->name('admin.room.create');
Route::post('create/room', [RoomsController::class, "store"])->name('admin.room.store');