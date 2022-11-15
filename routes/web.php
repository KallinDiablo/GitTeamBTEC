<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mylab;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProductController;

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

Route::group(['prefix' =>'category'], function(){

    Route::get('/',[CategoryController::class,'index'])->name('admin.category.index');
    
    Route::get('create/',[CategoryController::class,'getCreate'])->name('admin.category.create');
    
    Route::post('create/',[CategoryController::class,'postCreate']);
    
    Route::get('edit/{id}',[CategoryController::class,'getEditCate']);
    
    Route::post('edit/{id}',[CategoryController::class,'postEditCate']);
    
    Route::get('delete/{id}',[CategoryController::class,'delete']);
    
    });
Route::group(['prefix' =>'country'], function(){

    Route::get('/',[CountryController::class,'index'])->name('admin.country.index');
        
    Route::get('create/',[CountryController::class,'getCreate'])->name('admin.country.create');
    
    Route::post('create/',[CountryController::class,'postCreate']);
    
    Route::get('edit/{id}',[CountryController::class,'getEditCate']);
    
    Route::post('edit/{id}',[CountryController::class,'postEditCate']);
    
    Route::get('delete/{id}',[CountryController::class,'delete']);  
        
});
Route::group(['prefix' =>'product'], function(){

    Route::get('/',[ProductController::class,'index'])->name('admin.product.index');
        
    Route::get('create/',[ProductController::class,'getCreate'])->name('admin.product.create');
    
    Route::post('create/',[ProductController::class,'postCreate']);
    
    Route::get('edit/{id}',[ProductController::class,'getEditCate']);
    
    Route::post('edit/{id}',[ProductController::class,'postEditCate']);
    
    Route::get('delete/{id}',[ProductController::class,'delete']);  
        
});

