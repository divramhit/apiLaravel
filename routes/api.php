<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderTableController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['middleware' => ['api']], function () {
// });

Route::get('/get-allproducts', [ProductsController::class, 'getAllProducts']);
Route::get('/get-allclients', [ClientController::class, 'getAllClients']);
Route::get('/get-allcategories', [CategoryController::class, 'getAllCategories']);
Route::get('/get-allorders', [OrderTableController::class, 'getAllOrders']);
Route::post('/delete-category', [CategoryController::class, 'deleteCategory']);
Route::post('/delete-product', [ProductsController::class, 'deleteProduct']);
