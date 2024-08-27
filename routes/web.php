<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


// Route to display the shop page with all products
Route::get('/shop', [ProductController::class, 'index'])->name('shopX');

// Routes to create a new product
Route::get('/add-product', [ProductController::class, 'create'])->name('products.create');
Route::post('/add-product', [ProductController::class, 'store'])->name('products.store');

// Other routes...
Route::get('/', [UserController::class, 'bro_wtf']);
Route::get('/login', [UserController::class, 'loginWW']);
Route::get('/about', [UserController::class, 'hottofood']);
Route::get('/contact', [UserController::class, 'knockknockfbitoyourdoor']);
Route::post('/login/done', [UserController::class, 'yeslogin']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/users', [UserController::class, 'createUser']);


//Route::get('/', [UserController::class, 'bro_wtf']);
////Route::get('/shop/logged', [UserController::class, 'shopX']);
//Route::get('/shop', [ProductController::class, 'index']);
//Route::get('/login', [UserController::class, 'loginWW']);
//Route::get('/about', [UserController::class, 'hottofood']);
//Route::get('/contact', [UserController::class, 'knockknockfbitoyourdoor']);
//Route::post('/login/done', [UserController::class, 'yeslogin']);
//Route::get('/register', [UserController::class, 'register']);
//Route::post('/users', [UserController::class, 'createUser']);
//
//
////ADD PRODUCT MAN
//Route::get('/add-product', [ProductController::class, 'create'])->name('products.create');
//Route::post('/add-product', [ProductController::class, 'store'])->name('products.store');
//
////Route::post('/users/authenticate', [UserController::class, 'authenticate']);
////route::get('/shop', [UserController::class, 'shopX'])->name('shopX');//??
