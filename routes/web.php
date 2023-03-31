<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\PostsController::class, 'index']);

Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);

Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);

Route::post('/comment/store', [App\Http\Controllers\CommentController::class, 'store']);
