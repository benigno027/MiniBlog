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

// Route::get('/', function () {
//     return view('publications/index');
// });

Route::get('/', 'PublicationController@index')->name('publications.index');

// Route::get('publications/index', 'PublicationController@index')->name('publications.index');
Route::get('publications/{id}', 'PublicationController@show')->name('publications.show');
Route::get('publications/create', 'PublicationController@create')->name('publications.create');
Route::post('publications/store', 'PublicationController@store')->name('publications.store');


Route::get('publications/', 'PublicationController@index')->name('publications');



Route::get('admins', 'AdminController@index')->name('admins.index');

Route::get('admins/publications', 'PublicationController@listpublication')->name('admins.publications');


Route::get('admins/categories', 'CategoryController@index')->name('admins.categories');
Route::post('categories/store', 'CategoryController@store')->name('categories.store');
Route::delete('categories/{id}', 'CategoryController@destroy')->name('categories.destroy');

