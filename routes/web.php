<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteCRUDController;
use App\Http\Controllers\GoyPlayerController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\PanelController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\PanelController::class, 'profile'])->name('profile');
Route::get('/settings', [App\Http\Controllers\PanelController::class, 'settings'])->name('settings');

Route::resource('notes', NoteCRUDController::class);
Route::post('notes/updateColor', [App\Http\Controllers\NoteCRUDController::class, 'updateColor'] )->name('notes/updateColor');

Route::get('/goyplayer', [App\Http\Controllers\GoyPlayerController::class, 'index'])->name('goyplayer.index'); 
/* Route::resource('goyplayer', GoyPlayerController::class); */