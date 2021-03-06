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

Route::get('/main', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('is_admin')->prefix('admin')->group(function(){
    Route::get('/user', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.user');
    Route::get('/user', [App\Http\Controllers\AdminController::class, 'user'])->name('admin.user');
    Route::post('/user', [App\Http\Controllers\AdminController::class, 'submit_user'])->name('admin.user.submit');
    Route::patch('/user', [App\Http\Controllers\AdminController::class, 'update_user'])->name('admin.user.delete');
});

// pengelolaan Brand
Route::get('/brand', [App\Http\Controllers\BrandController::class, 'index'])->name('brand');
Route::get('/ajax/dataBrand/{id}', [App\Http\Controllers\BrandController::class, 'getDataBrand']);
Route::post('/brand', [App\Http\Controllers\BrandController::class, 'submit_brand'])->name('brand.submit');
Route::patch('/brand/update', [App\Http\Controllers\BrandController::class, 'update_brand'])->name('brand.update');
Route::delete('/brand/delete', [App\Http\Controllers\BrandController::class, 'delete_brand'])->name('brand.delete');

// pengelolaan Categorie
Route::get('/categorie', [App\Http\Controllers\CategorieController::class, 'index'])->name('categorie');
Route::get('/ajax/dataCategorie/{id}', [App\Http\Controllers\CategorieController::class, 'getDataCategorie']);
Route::post('/categorie', [App\Http\Controllers\CategorieController::class, 'submit_categorie'])->name('categorie.submit');
Route::patch('/categorie/update', [App\Http\Controllers\CategorieController::class, 'update_categorie'])->name('categorie.update');
Route::delete('/categorie/delete', [App\Http\Controllers\CategorieController::class, 'delete_categorie'])->name('categorie.delete');

// pengelolaan Product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/ajax/dataProduct/{id}', [App\Http\Controllers\ProductController::class, 'getDataProduct']);
Route::post('/product', [App\Http\Controllers\ProductController::class, 'submit_product'])->name('product.submit');
Route::patch('/product/update', [App\Http\Controllers\ProductController::class, 'update_product'])->name('product.update');
Route::delete('/product/delete', [App\Http\Controllers\ProductController::class, 'delete_product'])->name('product.delete');

// pengelolaan User
Route::middleware('is_admin')->prefix('admin')->group(function(){
    Route::get('/user', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.user');
    Route::get('/user', [App\Http\Controllers\AdminController::class, 'user'])->name('admin.user');
    Route::post('/user', [App\Http\Controllers\AdminController::class, 'submit_user'])->name('admin.user.submit');
    Route::patch('/user/update', [App\Http\Controllers\AdminController::class, 'update_user'])->name('admin.user.update');
    Route::delete('/user/delete', [App\Http\Controllers\AdminController::class, 'delete_user'])->name('admin.user.delete');
});

// Route::middleware('is_user')->prefix('user')->group(function(){

// });


// PENGOLOLAAN BRANDS

//Pengelolaan barang masuk
Route::get('/barangmasuk', [App\Http\Controllers\BarangmasukController::class, 'index'])->name('barangmasuks')->middleware('is_admin');
Route::get('/print_barangmasuk', [App\Http\Controllers\BarangmasukController::class, 'print_barangmasuk'])->name('print_barangmasuk')->middleware('is_admin');


//pengolaan barang keluar
Route::get('/barangkeluar', [App\Http\Controllers\BarangkeluarController::class, 'index'])->name('barangkeluars')->middleware('is_admin');
Route::get('/print.barangkeluar', [App\Http\Controllers\BarangkeluarController::class, 'print.barangkeluar'])->name('print_barangkeluar')->middleware('is_admin');


// Route::get('admin/print_barangmasuk'),
// [App\Http\Controllers\AdminController::class, 'print_barangmasuk'])
//     ->name('admin.print.barangmasuk')
//     ->middleware('is_admin');