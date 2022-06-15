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
Route::get('/dashboard', function(){
    return view('backend.dashboard');
})->name('dashboard');


Route::get('/blank', function(){
    return view('backend.blank');
});


// for Product
Route::group(['prefix'=>'/product'], function(){
    Route::get('/create', 
    'App\Http\Controllers\Backend\ProductController@create')->name('create');
    Route::post('/store', 
    'App\Http\Controllers\Backend\ProductController@store')->name('store');
    Route::get('/manage', 
    'App\Http\Controllers\Backend\ProductController@index')->name('manage');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->name('edit');
    Route::post('/update/{id}','App\Http\Controllers\Backend\ProductController@update')->name('update');
    Route::get('/delete/{id}', 
    'App\Http\Controllers\Backend\ProductController@destroy')->name('delete');
});

//for Category
Route::group(['prefix'=>'/category'], function(){
    Route::get('/create', 
    'App\Http\Controllers\Backend\CategoryController@create')->name('categoryCreate');
    // Route::post('/store', 
    // 'App\Http\Controllers\Backend\CategoryController@store')->name('categoryStore');
    // Route::get('/manage', 
    // 'App\Http\Controllers\Backend\CategoryController@index')->name('categoryStore');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
