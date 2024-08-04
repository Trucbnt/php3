<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController as AdminController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;
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


Route::resource("products" , ProductController::class);
Route::resource("shop" , ShopController::class);
Route::post("products/search", [ProductController::class , "search" ])->name("search");

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
//ADMIN route

Route::prefix("admin")->name("admin.")->group(function(){
    Route::resource("product" , AdminController::class);
    Route::resource("category" , CategoryController::class);
})->middleware(['auth','isAdmin']);