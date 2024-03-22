<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', [App\Http\Controllers\GroupController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post');
Route::get('/spy/{id}', [App\Http\Controllers\Auth\LoginController::class, 'spy'])->name('spy');
Route::get('/groups', [App\Http\Controllers\GroupController::class, 'index'])->name('groups');
Route::post('/groups/{id}/notify', [App\Http\Controllers\GroupController::class, 'notify'])->name('notify');
Route::post('/send/{id}', [App\Http\Controllers\SendMessageController::class, 'send'])->name('send');
