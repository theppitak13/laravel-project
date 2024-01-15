<?php

use App\Http\Controllers\AdminController;
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
Route::get('formdata', function () {
    return view('formdata');
});
Route::get('categorises', [AdminController::class, 'category']);
Route::get('product', [AdminController::class, 'production']);
Route::get('customer', [AdminController::class, 'customer']);
// insert data 
Route::post('category', [AdminController::class, 'insertcategory']);
Route::post('product', [AdminController::class, 'insertproduct']);
Route::post('customer', [AdminController::class, 'insertcustomer']);
// delete data
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
// edit data
Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
Route::get('editone/{id}',[AdminController::class,'editone'])->name('editone');
Route::get('edittwo/{id}',[AdminController::class,'edittwo'])->name('edittwo');



