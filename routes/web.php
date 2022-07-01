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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/salir', [App\Http\Controllers\HomeController::class, 'logout'])->name('salir');


Route::get('/users', [App\Http\Controllers\UserController::class, 'getUser'])->name('users.index');
Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'editUser'])->name('users.edit');
Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'updateUser'])->name('users.update');
route::delete('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'deleteUser'])->name('users.delete');




Route::get('/products', [App\Http\Controllers\ProductsController::class, 'getProducts'])->name('products.index');
Route::get('/products/create', [App\Http\Controllers\ProductsController::class, 'addProducts'])->name('products.create');
Route::post('/products/store', [App\Http\Controllers\ProductsController::class, 'storeProducts'])->name('products.store');
Route::get('/products/edit/{id_product}', [App\Http\Controllers\ProductsController::class, 'editProducts'])->name('products.edit');
Route::post('/products/update/{id_product}', [App\Http\Controllers\ProductsController::class, 'updateProducts'])->name('products.update');
  route::delete('/products/delete/{id_product}', [App\Http\Controllers\ProductsController::class, 'deleteProducts'])->name('products.delete');

  Route::get('/compras', [App\Http\Controllers\ComprasController::class, 'getCompras'])->name('compras.index');
  Route::post('/compras/store', [App\Http\Controllers\ComprasController::class, 'addCompras'])->name('compras.store');
  Route::post('/compras/factura', [App\Http\Controllers\ComprasController::class, 'facturarCompras'])->name('compras.factura');


Route::get('/facturas', [App\Http\Controllers\FacturasController::class, 'getFacturas'])->name('facturas.index');
Route::get('/facturas/show/{id_factura}', [App\Http\Controllers\FacturasController::class, 'showFacturas'])->name('facturas.show');
Route::post('/facturas/edit/{id_factura}', [App\Http\Controllers\FacturasController::class, 'editFacturas'])->name('facturas.edit');
Route::delete('/facturas/delete/{id}', [App\Http\Controllers\FacturasController::class, 'deleteFacturas'])->name('facturas.delete');