<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\AuthController;
    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('/post/{id}',[HomeController::class, 'post'])->name('post.new');
    Route::get('/category/{id}',[HomeController::class, 'category'])->name('category');
    Route::get('/login',[HomeController::class, 'showLogin'])->name('show.login');
    Route::get('/signup',[HomeController::class, 'showSignup'])->name('show.signup');
    Route::post('/signup',[AuthController::class,'register'])->name('register');
    Route::post('/login',[AuthController::class,'loginUser'])->name('login-user');
    Route::get('/logout',[HomeController::class,'logout'])->name('logout');
    Route::middleware('user')->get('/comment/{id}',[HomeController::class,'comment'])->name('comment');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::get('/profile',[HomeController::class,'profile'])->name('profile');
    Route::get('/edit-profile',[HomeController::class,'editProfile'])->name('edit-profile');
    Route::post('/edit-profile/{id}',[HomeController::class,'doEditProfile'])->name('doEdit.profile');
?>