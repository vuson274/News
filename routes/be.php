<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\AdminController;
    use App\Http\Controllers\Admin\CategoryController;
    use App\Http\Controllers\Admin\PostController;
    use App\Http\Controllers\Admin\UserController;
    Route::prefix('/admin')->group(function(){
        Route::prefix('/user')->group(function(){
            Route::get('/',[UserController::class,'list'])->name('admin.user.list');
            Route::post('/add',[UserController::class,'doAdd'])->name('admin.user.doAdd');
            Route::post('/edit',[UserController::class,'doEdit'])->name('admin.user.doEdit');
            Route::get('/edit/{id}',[UserController::class,'delete'])->name('admin.user.delete');
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
            Route::get('/edit/{id}',[PostController::class, 'edit'])->name('admin.post.edit');
            Route::post('/edit',[PostController::class,'doEdit'])->name('admin.post.doEdit');
            Route::get('/delete',[PostController::class,'delete'])->name('admin.post.delete');
        });
        Route::post('/upload', [PostController::class,'upload'])->name('ckeditor.upload');
    });
?>