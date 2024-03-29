<?php

use App\Http\Controllers\PricesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\DecorationsController;
use \App\Http\Controllers\CommentsController;

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




Route::get('/', [HomeController::class, 'index'])->name('home');

/*Route::get('/decorations',[DecorationsController::class, 'index'])->name('decorations');

Route::get('/comments', [CommentsController::class, 'index'])->name('comments');*/
Route::post('/comments',[CommentsController::class, 'store'])->name('comments.create');

Route::get('/prices',[PricesController::class, 'index'])->name('prices.calculate');




