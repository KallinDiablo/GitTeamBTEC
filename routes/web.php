<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mylab;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

//địa chỉ
Route::get('register', [UserController::class, 'show']);
Route::post('api/fetch-districts', [UserController::class, 'fetchDistrict']);
Route::post('api/fetch-wards', [UserController::class, 'fetchWard']);


//

Route::post('register', [UserController::class, 'store'])->name('welcome.register');


Route::get('login', [UserController::class, 'showLogin'])->name('auth.login');
Route::get('logout', [UserController::class, 'Logout'])->name('logout');
Route::post('login', [UserController::class, 'login']);

Route::prefix('admin')->group(function () {
    Route::get('', function () {
        return view('admin.index');
    });
    Route::group(['prefix' => 'category'], function () {

        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');

        Route::get('create/', [CategoryController::class, 'getCreate'])->name('admin.category.create');
        
        Route::post('create/', [CategoryController::class, 'postCreate']);

        Route::get('edit/{id}', [CategoryController::class, 'getEditCate']);

        Route::post('edit/{id}', [CategoryController::class, 'postEditCate']);

        Route::get('delete/{id}', [CategoryController::class, 'delete']);
    });
    Route::group(['prefix' => 'country'], function () {

        Route::get('/', [CountryController::class, 'index'])->name('admin.country.index');

        Route::get('create/', [CountryController::class, 'getCreate'])->name('admin.country.create');

        Route::post('create/', [CountryController::class, 'postCreate']);

        Route::get('edit/{id}', [CountryController::class, 'getEditCate']);

        Route::post('edit/{id}', [CountryController::class, 'postEditCate']);

        Route::get('delete/{id}', [CountryController::class, 'delete']);
    });
    Route::group(['prefix' => 'product'], function () {

        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');

        Route::get('create/', [ProductController::class, 'getCreate'])->name('admin.product.create');

        Route::post('create/', [ProductController::class, 'postCreate']);

        Route::get('edit/{id}', [ProductController::class, 'getEditCate']);

        Route::post('edit/{id}', [ProductController::class, 'postEditCate']);

        Route::get('delete/{id}', [ProductController::class, 'delete']);
    });
    Route::group(['prefix' => 'role'], function () {

        Route::get('/', [ProductController::class, 'index'])->name('admin.role.index');

        Route::post('/', [ProductController::class, 'indexpostCreate']);

        Route::get('delete/{id}', [ProductController::class, 'delete']);
    });
    Route::group(['prefix' => 'user'], function () {

        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');

        Route::get('create/', [UserController::class, 'getCreate'])->name('admin.user.create');

        Route::post('create/', [UserController::class, 'postCreate']);

        Route::get('edit/{id}', [UserController::class, 'getEditCate']);

        Route::post('edit/{id}', [UserController::class, 'postEditCate']);

        Route::get('delete/{id}', [UserController::class, 'delete']);
    });
});

use App\Http\Controllers\indexController;

Route::get('home',[indexController::class,'index'])->name('home');  
Route::get('home/product-detail/{id}',[indexController::class,'detail'])->name('home/product-detail');  
