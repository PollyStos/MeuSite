<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('page/welcome');
});
Route::get('/blog', function () {
    return view('page/blog');
});
Route::get('/blog-single', function () {
    return view('page/blog-single');
});
Route::get('/portfolio', function () {
    return view('page/page-portfolio');
});

Route::get('/admin-dashboard', function () {
    return view('page/admin/admin');
});




