<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyController;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





// free Routes
Route::get('/',Home::class)->name('home');
Route::get('/all',[MyController::class,'index']);
Route::get('/menu',[MyController::class,'menu']);
Route::get('/reservation',[MyController::class,'reservation']);
Route::get('/about-us',[MyController::class,'aboutus']);
Route::get('/contact-us',[MyController::class,'contactus']);
Route::get('/shopping-cart',[MyController::class,'cart']);
// User Authenticate pages

//login route
Route::get('/login',[MyController::class, 'login']);
Route::get('/signup',[MyController::class, 'signup']);
//login route


// Admin pannel
Route::get('/admin',[MyController::class,'admin']);
Route::post('/admin',[MyController::class,'admin']);

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home',[HomeController::class, 'index'])->name('home');

});



//Admin Pannel
Route::middleware('is_admin')->prefix('admin')->group(function(){
Route::get('/home',[HomeController::class,'adminHome'])->name('admin.home');
});

