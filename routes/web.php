<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', function () {
    return view('Products');
})->middleware(['auth', 'verified'])->name('product');

Route::get('/addtocart', function () {
    return view('addtocart');
})->middleware(['auth', 'verified'])->name('cart');


Route::get('/order', function () {
    return view('order');
})->middleware(['auth', 'verified'])->name('order');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //User Pannel Built by Coo_Mar
    Route::get('/home', [UserController::class, 'user_index'])->name('UserIndex');
    Route::get('/shop', [UserController::class, 'shop'])->name('shop');

});


Route::middleware(['auth', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'admindashboard'])->name('AdminDashboard');
});

require __DIR__ . '/auth.php';