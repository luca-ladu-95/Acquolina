<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\DishController::class , 'index'])->name('homepage');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'index'])->name('homeadmin');
    Route::get('/modifica-menu',[\App\Http\Controllers\DishController::class,'show'])->name('edit_menu');
    Route::delete('/modifica-menu/{dish}',[\App\Http\Controllers\DishController::class,'destroy'])->name('delete_dish');
    Route::get('/modifica-menu/{dish}',[\App\Http\Controllers\DishController::class,'update'])->name('edit_dish');
    Route::patch('/modifica-menu/{dish}',[\App\Http\Controllers\DishController::class,'store'])->name('store_dish');

});



Auth::routes();


