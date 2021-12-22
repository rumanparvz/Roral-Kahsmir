<?php

use App\Http\Controllers\MyController;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;





// free Routes
Route::get('/',Home::class)->name('home');
Route::get('/all',[MyController::class,'index']);
Route::get('/menu',[MyController::class,'menu']);
Route::get('/cart',[MyController::class,'cart']);
Route::get('/reservation',[MyController::class,'reservation']);
Route::get('/about-us',[MyController::class,'aboutus']);
Route::get('/contact-us',[MyController::class,'contactus']);

// User Authenticate pages



// Admin pannel
Route::get('/admin',[MyController::class,'admin']);

