<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class, 'index'])->name('Home');
Route::get('/shop', [Controller::class, 'shop'])->name('Shop');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('Transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('Contact Us');
Route::get('/checkout', [Controller::class, 'checkout'])->name('Check Out');