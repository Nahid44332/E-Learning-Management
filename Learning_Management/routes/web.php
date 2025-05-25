<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [FrontendController::class ,'index']);
Route::get('/about-us' , [FrontendController::class ,'aboutUs']);
Route::get('/contact-us' , [FrontendController::class ,'contactUs']);
Route::get('/terms' , [FrontendController::class ,'Terms']);