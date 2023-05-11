<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

Route::get('/welcome', function () {
    return view('welcome');
});


// Route::group(['middleware'=>'guest'],function(){
// //For customer
// Route::get('/', [HomeController::class,'home'])->name('home');
// Route::get('/register', [AuthController::class,'register'])->name('register');
// Route::post('/register-post', [AuthController::class,'registerPost'])->name('register.post');
// Route::get('/login', [AuthController::class,'login'])->name('login');
// Route::post('/login-post', [AuthController::class,'loginPost'])->name('login.post');
// });

// //For admin
// Route::group(['middleware'=>'auth'],function(){

// //For admin
// Route::get('/admin-dashboard', [AdminController::class,'adminDashboard'])->name('admin.dashboard');
// Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
// //For customer
// Route::get('/dashboard', [AuthController::class,'dashboard'])->name('dashboard');
   
// });

// For customer
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AuthController::class,'dashboard'])->name('dashboard');
});

// For admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin-dashboard', [AdminController::class,'adminDashboard'])->name('admin.dashboard');
    Route::get('/addproduct',[ProductController::class, 'addProduct'])->name('add.product');
    Route::get('/addcategory',[ProductController::class, 'addCategory'])->name('add.category');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Unprotected routes
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register-post', [AuthController::class,'registerPost'])->name('register.post');
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login-post', [AuthController::class,'loginPost'])->name('login.post');

  




