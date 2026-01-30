<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('destination/{slug?}', [HomeController::class, 'destination']);
Route::get('destination-detail/{slug?}', [HomeController::class, 'destinationDetail']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog-detail', [HomeController::class, 'blogDetail']);


