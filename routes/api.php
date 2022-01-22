<?php

use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\Crud\CategoryController;
use App\Http\Controllers\Crud\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {
    Route::get('/',function(){
        return 'PRODUCT CRUD API';
    });

    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductController::class);

    // show products by category id
    Route::get('category-products/{category_id}', CategoryProductController::class);
});


