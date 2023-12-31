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
Route::get('/admin-portfolio', function () {
    return view('page/admin/admin-portfolio');
});

// Rotas Admin
Route::get('/admin-pages', [AdminPageController::class, 'show']);
Route::get('admin/pages/create', [AdminPageController::class, 'create']);
Route::post('admin/pages/create', [AdminPageController::class, 'store'])->name('page_register');
Route::get('admin/pages/view/{id}', [AdminPageController::class, 'view']);
Route::get('admin/pages/update/{id}', [AdminPageController::class, 'edit']);
Route::post('admin/pages/update/{id}', [AdminPageController::class, 'update'])->name('page_update');
Route::delete('admin/pages/delete/{id}', [AdminPageController::class, 'delete'])->name('page_delete');

Route::get('/admin-pages-section', [AdminPageController::class, 'showSection']);
Route::get('admin/pages-section/create', [AdminPageController::class, 'createSection']);
Route::post('admin/pages-section/create', [AdminPageController::class, 'storeSection'])->name('pageSection_register');


