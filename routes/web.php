<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\UserProfileController;
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

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin Room Routes
Route::get('create/room', [RoomsController::class, "create"])->name('admin.room.create')->middleware(['auth','verified','is.admin']);
Route::post('create/room', [RoomsController::class, "store"])->name('admin.room.store');

Route::get('edit/{id}/room', [RoomsController::class, 'edit'])->name('admin.room.edit');
Route::put('update/{id}/room', [RoomsController::class, 'update'])->name('admin.room.update');

Route::delete('room/{id}/delete', [RoomsController::class, 'destroy'])->name('admin.room.destroy');


Route::get('rooms', [RoomsController::class, 'all_rooms'])->name('admin.all.rooms');

// PROFILE ROUTE
Route::get('profile', [UserProfileController::class, 'view_profile'])->name('profile.view')->middleware(['auth','verified']);
Route::patch('profile', [UserProfileController::class, 'update_profile'])->name('profile.update')->middleware(['auth', 'verified']);