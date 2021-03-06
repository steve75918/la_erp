<?php

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

Route::prefix('product')->group(function () {
    Route::get('', function () {
        return view('product.index');
    });

    Route::resource('publishers', 'Product\PublisherController');
    Route::resource('brands', 'Product\BrandController');
    Route::resource('authors', 'Product\AuthorController');
    Route::resource('categories', 'Product\CategoryController');
    Route::resource('tags', 'Product\TagController');
    Route::resource('series', 'Product\SeriesController');
    Route::resource('books', 'Product\BookController');
});
