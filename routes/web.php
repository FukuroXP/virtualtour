<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogBookController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [AdminController::class, 'index'])->name('admin');

Route::get('/home', [GuestController::class, 'index'])->name('home');
Route::get('autocomplete', [GuestController::class, 'autocomplete'])->name('autocomplete');
Route::post('search', [GuestController::class, 'search'])->name('search');
Route::get('/home/room/{id}', [GuestController::class, 'view'])->name('guest.room.view');
Route::get('/home/log/{room_id}', [GuestController::class, 'log'])->name('guest.log');
Route::post('log_store', [GuestController::class, 'log_store'])->name('guest.log.store');

Route::get('admin', [AdminController::class, 'index'])->name('admin');

Route::get('room', [RoomController::class, 'index'])->name('room.show');
Route::get('room/add', [RoomController::class, 'create'])->name('room.add');
Route::post('room_store', [RoomController::class, 'store'])->name('room.store');
Route::get('room/view/{id}', [RoomController::class, 'view'])->name('room.view');
Route::get('room/edit/{id}', [RoomController::class, 'edit'])->name('room.edit');
Route::post('room_update/{id}', [RoomController::class, 'update'])->name('room.update');
Route::delete('room_delete/{id}', [RoomController::class, 'destroy'])->name('room.destroy');

Route::get('room/video', [VideoController::class, 'index'])->name('room.video.show');
Route::post('video_store', [VideoController::class, 'store'])->name('room.video.store');
Route::get('room/video/view/{id}', [VideoController::class, 'view'])->name('room.video.view');
Route::get('room/video/edit/{id}', [VideoController::class, 'edit'])->name('room.video.edit');
Route::post('video_update/{id}', [VideoController::class, 'update'])->name('room.video.update');
Route::delete('video_deleteR/{id}', [VideoController::class, 'destroy1'])->name('room.video.destroy1');
Route::delete('video_deleteV/{id}', [VideoController::class, 'destroy2'])->name('room.video.destroy2');

Route::get('log', [LogBookController::class, 'index'])->name('log.show');
Route::get('log/view/{id}', [LogBookController::class, 'view'])->name('log.view');
Route::delete('log_delete/{id}', [LogBookController::class, 'destroy'])->name('log.destroy');
