<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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


/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/Productos', function () {
    return view('Productos.index');
});



Route::get('/Productos/create',[ProductosController::class,'create']);

*/


Route::resource('products',ProductsController::class);




