<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [FrontendController::class ,'index']);
Route::get('/about-us' , [FrontendController::class ,'aboutUs']);
Route::get('/contact-us' , [FrontendController::class ,'contactUs']);

// admin Auth Routes
Route::get('/admin/login' , [AuthController::class ,'adminLogin']);

Auth::routes();
Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);
