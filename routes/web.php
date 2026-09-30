<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PenjualanController;


use App\Http\Controllers\ProductController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\DiscountController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'products']);
Route::get('/detailproducts', [ProductController::class, 'detailproducts']);
Route::get('/notaproducts/{id}/{nama}', 
[ProductController::class, 'notaproducts']);

Route::get('/formkaryawan', [KaryawanController::class, 'formkaryawan']);
Route::post('/insertkaryawan', [KaryawanController::class, 'insertkaryawan']);

Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculator/add', [CalculatorController::class, 'add']);
Route::post('/calculator/subtract', [CalculatorController::class, 'subtract']);
Route::post('/calculator/multiply', [CalculatorController::class, 'multiply']);
Route::post('/calculator/divide', [CalculatorController::class, 'divide']);

Route::get('/discount', [DiscountController::class, 'index']);
Route::post('/discount/calculate', [DiscountController::class, 'calculate']);


Route::get('/item', [ItemController::class, 'index']);
Route::get('/tampil', [ItemController::class, 'tampil']);

Route::get('/data-karyawan', [DataKaryawanController::class, 'tampil']);
Route::get('/data-supplier', [SupplierController::class, 'tampil']);


Route::get('/katalog',[PenjualanController::class, 'katalog']);