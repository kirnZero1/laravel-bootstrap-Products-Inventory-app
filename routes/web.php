<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::middleware('auth')->group(function (){
    Route::get('/', [ProductsController::class, 'index'])->name('product.index');
    Route::get('/post/{product}/view',[ProductsController::class, 'view'])->name('product.view');
    Route::get('/post/create',[ProductsController::class, 'create'])->name('product.create');
    Route::post('/post/store',[ProductsController::class, 'store'])->name('product.store');
    Route::get('/post/{product}/edit',[ProductsController::class, 'edit'])->name('product.edit');
    Route::put('/post/{product}/update',[ProductsController::class, 'update'])->name('product.update');
    Route::post('/post/{product}/delete',[ProductsController::class, 'destroy'])->name('product.delete');
    Route::post('/user/logout',[UserController::class, 'logout'])->name('user.logout');
 });

Route::middleware('guest')->group(function (){
    Route::get('/user/login',[UserController::class, 'loginview'])->name('user.loginview');
    Route::post('/user/login',[UserController::class, 'login'])->name('user.login');
    Route::get('/user/create',[UserController::class, 'create'])->name('user.create');
    Route::post('/user/store',[UserController::class, 'store'])->name('user.store');
});





