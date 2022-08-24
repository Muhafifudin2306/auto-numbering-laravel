<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrefixController;
use App\Http\Controllers\InvoiceController;

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

Route::get('/', [PrefixController::class, 'index'])->name('index');
Route::get('/addprefix', [PrefixController::class, 'add'])->name('add');
Route::post('/prefixadd', [PrefixController::class, 'prefixadd'])->name('add');
Route::get('/edit/{id}', [PrefixController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [PrefixController::class, 'update'])->name('update');
Route::get('/destroy/{id}',[PrefixController::class, 'destroy'])->name('destroy');

Route::get('/invoice', [InvoiceController::class, 'index'])->name('index-invoice');
Route::get('/addinvoice', [InvoiceController::class, 'add'])->name('add-invoice');
Route::post('/invoiceadd', [InvoiceController::class, 'invoiceadd'])->name('add-invoice');
Route::get('/invedit/{id}', [InvoiceController::class, 'edit'])->name('edit-invoice');
Route::post('/invupdate/{id}', [InvoiceController::class, 'update'])->name('update-invoice');
Route::get('/invdestroy/{id}',[InvoiceController::class, 'destroy'])->name('destroy-invoice');