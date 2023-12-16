<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/sales', 'SaleController@index')->name('sales.index');
Route::post('/products', 'ProductController@store')->name('products.store');
// Add other necessary routes
