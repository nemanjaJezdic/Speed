<?php

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

Route::get('/', [\App\Http\Controllers\FrontendCon::class, 'home'])->name('home');

Route::get('/contact', [\App\Http\Controllers\FrontendCon::class, 'contact'])->name('contact');
Route::post('/contact', [\App\Http\Controllers\FrontendCon::class, 'storeContact']);

Route::get('/author', [\App\Http\Controllers\FrontendCon::class, 'author'])->name('author');

Route::get('/register', [\App\Http\Controllers\RegisterCon::class, 'index'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterCon::class, 'store']);

Route::get('/login', [\App\Http\Controllers\LoginCon::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginCon::class, 'store']);

Route::get('/products', [\App\Http\Controllers\ProductsCon::class, 'products'])->name('products');
Route::get('products/{product}', [\App\Http\Controllers\ProductsCon::class, 'product'])->name('product');


Route::middleware([\App\Http\Middleware\CheckLogin::class])->group(function () {
    Route::get('/logout', [\App\Http\Controllers\LogoutCon::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'admin',  'middleware' => '\App\Http\Middleware\CheckAdmin'], function() {
    Route::resource('/users', \App\Http\Controllers\AdminUsersCon::class);
    Route::resource('/products', \App\Http\Controllers\AdminProductsCon::class);

    Route::get('/actions', [\App\Http\Controllers\AdminActionsCon::class, 'index'])->name('useractions.index');
});
