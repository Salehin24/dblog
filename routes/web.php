<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\PostController;

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

Auth::routes();

Route::get('/', function () {
    return view('frontend.layouts.home');
});

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\backend\DashboardController::class, 'index'])->middleware('auth')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'home/user'], function(){
    Route::get('/view', [App\Http\Controllers\backend\UserController::class, 'index'])->name('user.list');
    Route::get('/add', [App\Http\Controllers\backend\UserController::class, 'add'])->name('user.add');
    Route::post('/store', [App\Http\Controllers\backend\UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [App\Http\Controllers\backend\UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}', [App\Http\Controllers\backend\UserController::class, 'update'])->name('user.update');
    Route::get('/delete/{id}', [App\Http\Controllers\backend\UserController::class, 'delete'])->name('user.delete');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'home/profile'], function(){
    Route::get('/view', [App\Http\Controllers\backend\ProfileController::class, 'index'])->name('profile.view');
    Route::get('/edit', [App\Http\Controllers\backend\ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/update', [App\Http\Controllers\backend\ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'home/category'], function(){
    Route::get('/view', [App\Http\Controllers\backend\CategoryController::class, 'index'])->name('category.list');
    Route::get('/fetch', [App\Http\Controllers\backend\CategoryController::class, 'fetch'])->name('category.fetch');
    Route::get('/add', [App\Http\Controllers\backend\CategoryController::class, 'add'])->name('category.add');
    Route::post('/store', [App\Http\Controllers\backend\CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{id}', [App\Http\Controllers\backend\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{id}',[App\Http\Controllers\backend\CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{id}', [App\Http\Controllers\backend\CategoryController::class, 'delete'])->name('category.delete');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'home/subcategory'], function(){
    Route::get('/view', [App\Http\Controllers\backend\SubcategoryController::class, 'index'])->name('subcategory.list');
    Route::get('/add', [App\Http\Controllers\backend\SubcategoryController::class, 'add'])->name('subcategory.add');
    Route::post('/store', [App\Http\Controllers\backend\SubcategoryController::class, 'store'])->name('subcategory.store');
    Route::get('/edit/{id}', [App\Http\Controllers\backend\SubcategoryController::class, 'edit'])->name('subcategory.edit');
    Route::post('/update/{id}',[App\Http\Controllers\backend\SubcategoryController::class, 'update'])->name('subcategory.update');
    Route::get('/delete/{id}', [App\Http\Controllers\backend\SubcategoryController::class, 'delete'])->name('subcategory.delete');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'home/brand'], function(){
    Route::get('/view', [App\Http\Controllers\backend\BrandController::class, 'index'])->name('brand.list');
    Route::get('/add', [App\Http\Controllers\backend\BrandController::class, 'add'])->name('brand.add');
    Route::post('/store', [App\Http\Controllers\backend\BrandController::class, 'store'])->name('brand.store');
    Route::get('/edit/{id}', [App\Http\Controllers\backend\BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/update/{id}',[App\Http\Controllers\backend\BrandController::class, 'update'])->name('brand.update');
    Route::get('/delete/{id}', [App\Http\Controllers\backend\BrandController::class, 'delete'])->name('brand.delete');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'home/product'], function(){
    Route::get('/view', [App\Http\Controllers\backend\ProductController::class, 'index'])->name('product.list');
    Route::get('/add', [App\Http\Controllers\backend\ProductController::class, 'add'])->name('product.add');
    Route::post('/store', [App\Http\Controllers\backend\ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [App\Http\Controllers\backend\ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}',[App\Http\Controllers\backend\ProductController::class, 'update'])->name('product.update');
    Route::get('/delete/{id}', [App\Http\Controllers\backend\ProductController::class, 'delete'])->name('product.delete');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'home/post'], function(){
    Route::get('/view', [App\Http\Controllers\backend\PostController::class, 'index'])->name('post.list');
    Route::get('/add', [App\Http\Controllers\backend\PostController::class, 'add'])->name('post.add');
    Route::post('/store', [App\Http\Controllers\backend\PostController::class, 'store'])->name('post.store');
    Route::get('/edit/{id}', [App\Http\Controllers\backend\PostController::class, 'edit'])->name('post.edit');
    Route::post('/update/{id}',[App\Http\Controllers\backend\PostController::class, 'update'])->name('post.update');
    Route::get('/delete/{id}', [App\Http\Controllers\backend\PostController::class, 'delete'])->name('post.delete');
});

Route::get('/subcategory-fetch', [App\Http\Controllers\backend\BrandController::class, 'getSubcategories'])->middleware('auth')->name('subcategory.fetch');