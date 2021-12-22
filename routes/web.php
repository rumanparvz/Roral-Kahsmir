<?php

use App\Http\Controllers\MyController;
use App\Http\Livewire\Home;
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
//jbd



// Admin pannel
Route::get('/admin',[MyController::class,'admin']);
Route::post('/admin',[MyController::class,'admin']);





