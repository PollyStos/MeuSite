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

use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/learn', function () {
    return view('learn');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/projects', [ProjectController::class,'index']);
Route::get('/projects/create', [ProjectController::class,'create']);

Route::get('/game', function () {
    return view('game');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});
