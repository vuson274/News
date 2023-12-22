<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\AuthController;
    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('/post/{id}',[HomeController::class, 'post'])->name('post');
    Route::get('/category/{id}',[HomeController::class, 'category'])->name('category');
    Route::get('/login',[HomeController::class, 'showLogin'])->name('show.login');
    Route::get('/signup',[HomeController::class, 'showSignup'])->name('show.signup');
    Route::post('/signup',[AuthController::class,'register'])->name('register');
    Route::post('/login',[AuthController::class,'loginUser'])->name('login-user');
    Route::middleware('user')->get('/comment/{id}',[HomeController::class,'comment'])->name('comment');
?>