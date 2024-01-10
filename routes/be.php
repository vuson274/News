<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware('admin')->group(function(){
        Route::prefix('/user')->group(function(){
            Route::get('/',[UserController::class,'list'])->name('admin.user.list');
            Route::post('/add',[UserController::class,'doAdd'])->name('admin.user.doAdd');
            Route::post('/edit',[UserController::class,'doEdit'])->name('admin.user.doEdit');
            Route::get('/delete/{id}',[UserController::class,'delete'])->name('admin.user.delete');
        });
        Route::prefix('/category')->group(function(){
            Route::get('/',[CategoryController::class,'list'])->name('admin.category.list');
            Route::post('/add',[CategoryController::class,'doAdd'])->name('admin.category.doAdd');
            Route::post('/edit',[CategoryController::class,'doEdit'])->name('admin.category.doEdit');
            Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('admin.category.delete');
        });
        Route::prefix('/video')->group(function(){
            Route::get('/',[VideoController::class,'list'])->name('admin.video.list');
            Route::post('/add',[VideoController::class,'doAdd'])->name('admin.video.doAdd');
            Route::post('/edit',[VideoController::class,'doEdit'])->name('admin.video.doEdit');
            Route::get('/delete/{id}',[VideoController::class,'delete'])->name('admin.video.delete');
        });
        Route::prefix('/post')->group(function(){
            Route::get('/',[PostController::class,'list'])->name('admin.post.list');
            Route::get('/add',[PostController::class,'add'])->name('admin.post.add');
            Route::post('/add',[PostController::class,'doAdd'])->name('admin.post.doAdd');
            Route::get('/edit/{id}',[PostController::class, 'edit'])->name('admin.post.edit');
            Route::post('/edit',[PostController::class,'doEdit'])->name('admin.post.doEdit');
            Route::get('/delete/{id}',[PostController::class,'delete'])->name('admin.post.delete');
        });

        Route::post('/upload', [PostController::class,'upload'])->name('ckeditor.upload');
    });
    Route::get('/admin',[LoginController::class,'viewLogin'])->name('login');
    Route::post('/admin',[LoginController::class, 'Login'])->name('admin.login');
    Route::get('/admin/logout',[LoginController::class,'logout'])->name('admin.logout');
?>