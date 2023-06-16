<?php

use App\Http\Controllers\SepatuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Front\SepatuController;
use App\Http\Controllers\WebsiteController;
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

// ========================= ADMIN ===================//

Route::get('/', [WebsiteController::class, 'home'])
    ->name('home');

Route::get('/login', [WebsiteController::class, 'login'])
    ->name('login');
Route::post('/login-submit', [WebsiteController::class, 'login_submit'])
    ->name('login_submit');

Route::get('/registration', [WebsiteController::class, 'registration'])
    ->name('registration');
Route::post('/registration_submit', [WebsiteController::class, 'registration_submit'])
    ->name('registration_submit');

Route::get('/logout', [WebsiteController::class, 'logout'])
    ->name('logout');

// Route::get('/edit-profile', [ProfileController::class, 'index'])
//     ->name('profile');

// Route::post('/edit-profile-submit', [ProfileController::class, 'profile_submit'])
//     ->name('profile_submit');

Route::get('/dashboard', [SepatuController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/product/create', [SepatuController::class, 'create'])
    ->name('create');

Route::post('/product/store', [SepatuController::class, 'store'])
    ->name('store');

Route::get('/product/edit/{id}', [SepatuController::class, 'edit'])
    ->name('edit');

Route::post('/product/update/{id}', [SepatuController::class, 'update'])
    ->name('update');

Route::get('/product/delete/{id}', [SepatuController::class, 'delete'])
    ->name('delete');

Route::get('/product/detail/{id}', [SepatuController::class, 'detail'])
    ->name('detail');

// =====================================================================

Route::get('/products/available', [ProductController::class, 'getAvailableProducts'])
    ->name('stock_available');
Route::get('/products/unavailable', [ProductController::class, 'getUnavailableProducts'])
    ->name('stock_unavailable');
Route::get('/products/edit/{id}', [ProductController::class, 'editProductStock'])
    ->name('stock_edit');

Route::post('/products/{id}/stock', [ProductController::class, 'updateProductStock'])
    ->name('stock_update');

Route::get('/products/delete/{id}', [ProductController::class, 'deleteProductStock'])
    ->name('stock_delete');


// ========================= FRONTEND  ===================//

Route::get('/products/detail/{id}', [SepatuController::class, 'detailProduk'])
    ->name('detail_produk');

Route::get('/about', [SepatuController::class, 'about'])
    ->name('about');