<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),

], function ($router) {

    Route::get('/login', [AuthController::class, 'login']);
    Route::get("/category",[CategoryController::class, 'index' ]);
    Route::get('/category/create' ,[CategoryController::class, 'create' ]);
    Route::post('/category/store' ,[CategoryController::class, 'store' ])->name('auth.category.store');
    Route::get('/category/edit/{id}' ,[CategoryController::class, 'edit' ])->name('category.edit');
});