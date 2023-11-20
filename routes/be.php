<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\AdminController;
    use App\Http\Controllers\Admin\CategoryController;
    use App\Http\Controllers\Admin\PostController;
    Route::prefix('/admin')->group(function(){
        Route::prefix('/user')->group(function(){
            Route::get('/',[AdminController::class,'list'])->name('admin.user.list');
            Route::post('/add',[AdminController::class,'doAdd'])->name('admin.user.doAdd');
            Route::post('/edit',[AdminController::class,'doEdit'])->name('admin.user.doEdit');
            Route::get('/edit/{id}',[AdminController::class,'delete'])->name('admin.user.delete');
        });
        Route::prefix('/category')->group(function(){
            Route::get('/',[CategoryController::class,'list'])->name('admin.category.list');
            Route::post('/add',[CategoryController::class,'doAdd'])->name('admin.category.doAdd');
            Route::post('/edit',[CategoryController::class,'doEdit'])->name('admin.category.doEdit');
            Route::get('/edit/{id}',[CategoryController::class,'delete'])->name('admin.category.delete');
        });
        Route::prefix('/post')->group(function(){
            Route::get('/',[PostController::class,'list'])->name('admin.post.list');
            Route::get('/add',[PostController::class,'add'])->name('admin.post.add');
            Route::post('/add',[PostController::class,'doAdd'])->name('admin.post.doAdd');
            Route::post('/edit',[PostController::class,'doEdit'])->name('admin.post.doEdit');
            Route::get('/edit/{id}',[PostController::class,'delete'])->name('admin.post.delete');
        });
    });
?>