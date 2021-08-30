<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
   
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/teste', function () {
    return view('teste');
});

//////////////////////////////////////roles///////////////////////////////////////////////////////////////
Route::get('/role',[RoleController::class,'index'])->name('role.index');
Route::get('/role/create',[RoleController::class, 'create'])->name('role.create');
Route::any('/role/store',[RoleController::class,'store'])->name('role.store');
route::get('/role/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
route::any('/role/update/{id}',[RoleController::class,'update'])->name('role.update');
Route::any('/role/delete/{id}',[RoleController::class,'destroy'])->name('role.delete');
/////////////////////////////////////////user////////////////////////////////////////////////////////////////
route::get('/user',[UserController::class,'index']);
Route::get('/user/create',[UserController::class, 'create'])->name('user.create');
Route::any('user/store',[UserController::class,'store'])->name('user.store');
route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
route::any('/user/update/{id}',[UserController::class,'update'])->name('user.update');
Route::any('/user/delete/{id}',[UserController::class,'destroy'])->name('user.delete');
/////////////////////////////////////////post////////////////////////////////////////////////////////////////
route::get('/post',[PostController::class,'index']);
Route::get('/post/create',[PostController::class, 'create'])->name('post.create');
Route::any('/post/store',[PostController::class,'store'])->name('post.store');
route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
route::get('/post/show/{id}',[PostController::class,'show'])->name('post.show');
route::any('/post/update/{id}',[PostController::class,'update'])->name('post.update');
Route::any('/post/delete/{id}',[PostController::class,'destroy'])->name('post.delete');
/////////////////////////////////////////Permission////////////////////////////////////////////////////////////////
route::get('/permission',[PermissionController::class,'index']);
Route::get('/permission/create',[PermissionController::class, 'create'])->name('permission.create');
Route::any('/permission/store',[PermissionController::class,'store'])->name('permission.store');
route::get('/permission/edit/{id}',[PermissionController::class,'edit'])->name('permission.edit');
route::any('/permission/update/{id}',[PermissionController::class,'update'])->name('permission.update');
Route::any('/permission/delete/{id}',[PermissionController::class,'destroy'])->name('permission.delete');
/////////////////////////////////////////category////////////////////////////////////////////////////////////////
route::get('/category',[CategoryController::class,'index']);
Route::get('/category/create',[CategoryController::class, 'create'])->name('category.create');
Route::any('/category/store',[CategoryController::class,'store'])->name('category.store');
route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
route::any('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::any('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');




//require __Dir__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
