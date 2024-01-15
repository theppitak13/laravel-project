<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductTypeController;
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

Route::get('brands', function () {
    return view('brands.index');
});

Route::get('product_type', function () {
    return view('product_type.index');
});
Route::resource('/product_type',ProductTypeController::class);
