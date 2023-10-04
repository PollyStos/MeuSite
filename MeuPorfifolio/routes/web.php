<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminPageController;


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
    return view('page/admin/admin-dashboard');
});
Route::get('/admin-pages', function () {
    return view('page/admin/admin-pages');
});
Route::get('/admin-portfolio', function () {
    return view('page/admin/admin-portfolio');
});

Route::get('/admin-page', [AdminPageController::class, 'showAdminPage']);



