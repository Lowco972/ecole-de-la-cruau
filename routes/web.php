<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\UserAuth;
use App\Http\Controllers\UserController;


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
Route::get('/',[IndexController::class, 'indexForAll'])->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route');
Route::get('licencier/home', 'HomeController@handlelicencier')->name('licencier.route');
Route::get('adherent/home', 'HomeController@handleAdherent')->name('adherent.route');
Route::get('super admin/home', 'HomeController@handleSuperAdmin')->name('superAdmin.route');
Route::middleware(['auth:sanctum', 'verified', 'userAuth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//route for admin and super admin #user
Route::get('index/user', [UserController::class, 'index'])->name('index.user')->middleware('autorize_access');
Route::get('create/user', [UserController::class, 'create'])->name('create.user')->middleware('autorize_access');
//Route::get('show/user', [UserController::class, 'show'])->name('edit.user')->middleware('autorize_access');
Route::get('edit/user', [UserController::class, 'edit'])->name('edit.user')->middleware('autorize_access');
Route::put('update/user', [UserController::class, 'update'])->name('update.user')->middleware('autorize_access');
Route::delete('delete/user', [UserController::class, 'destroy'])->name('delete.user')->middleware('autorize_access');
Route::post('store/user', [UserController::class, 'store'])->name('store.user')->middleware('autorize_access');


//route for crud Post and show
Route::get('posts/index',[PostController::class, 'index'])->name('posts.index')->middleware('autorize_access');
Route::get('create/post',[PostController::class, 'create'])->name('post.create')->middleware('autorize_access');
Route::put('update/post',[PostController::class, 'update'])->name('post.update')->middleware('autorize_access');
Route::post('store/post',[PostController::class, 'store'])->name('post.store')->middleware('autorize_access');
Route::delete('delete/post',[PostController::class, 'destroy'])->name('post.update')->middleware('autorize_access');
Route::get('edit/post', [PostController::class, 'edit'])->name('post.edit')->middleware('autorize_access');
Route::get('show/post', [PostController::class, 'show'])->name('show.post')->middleware('authorizeUser');

// route for crud tag 

// route for a crud product 
Route::get('products/index',[ProductController::class, 'index'])->name('products.index')->middleware('autorize_access');
Route::get('products/create',[ProductController::class, 'create'])->name('products.create')->middleware('autorize_access');
Route::put('products/update',[ProductController::class, 'update'])->name('products.update')->middleware('autorize_access');
Route::post('products/store',[ProductController::class, 'store'])->name('products.store')->middleware('autorize_access');
Route::get('products/show',[ProductController::class, 'show'])->name('products.show')->middleware('authorizeUser');
Route::delete('products/edit',[ProductController::class, 'edit'])->name('products.edit')->middleware('autorize_access');
// route for crud category