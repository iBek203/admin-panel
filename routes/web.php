<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AdminController::class, 'index']);

Route::get('/admin', [AdminController::class, 'admin']);

Route::get('/admin/add-product', [AdminController::class, 'add_product']);

Route::post('/admin/product/check', [AdminController::class, 'create']);
