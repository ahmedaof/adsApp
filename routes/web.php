<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::group(
//   [
//     'prefix' => LaravelLocalization::setLocale(),
//     'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//   ], function(){ 


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , function(){
  return view('home');
});
// Route::get('/auth' , function(){
//   return view('backend.admin.index');
// });

// Route::group(['prefix'=>'auth'], function(){
//   Route::get('/category' ,[CategoryController::class, 'index' ]);
//   Route::get('/category/create' ,[CategoryController::class, 'create' ]);
//   Route::post('/category/store' ,[CategoryController::class, 'store' ])->name('auth.category.store');
//   Route::get('/category/edit/{id}' ,[CategoryController::class, 'edit' ])->name('category.edit');
// });
// });
Route::get('/{vue_capture?}',function () {
  return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');