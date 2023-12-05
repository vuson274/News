<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('/post/{id}',[HomeController::class, 'post'])->name('post');
    Route::get('/category/{id}',[HomeController::class, 'category'])->name('category');
?>