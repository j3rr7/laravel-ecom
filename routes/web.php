<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoutController;
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
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/shop', [HomeController::class, 'shop'])->name('home.shop');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/auth/{provider}', [AuthController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [AuthController::class, 'handleProvideCallback']);

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', [AuthController::class, 'show'])->name('login.show');
    Route::get('/register', [AuthController::class, 'show'])->name('register.show');

    Route::post('/login', [AuthController::class, 'login'])->name('login.perform');
    Route::post('/register', [AuthController::class, 'register'])->name('register.perform');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('home.wishlist');
    Route::get('/cart', [HomeController::class, 'cart'])->name('home.cart');
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('home.checkout');
    
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
});

