<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
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
Route::fallback(function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/find',[ProductController::class, 'find'])->name('product.find');
Route::get('/type',[ProductController::class, 'type'])->name('product.type');
Route::get('/dashboard/list',[DashboardController::class, 'list'])->middleware('auth')->name('dashboard.list');
Route::get('/dashboard/find',[DashboardController::class, 'find'])->middleware('auth')->name('dashboard.find');

Route::resource('product', ProductController::class)->only(['index','show']);
Route::resource('cart', CartController::class)->only(['index']);
Route::resource('dashboard', DashboardController::class)->middleware('auth')->except('show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
