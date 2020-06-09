<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', 'PublicationController@index')->name('publications.index');
Route::get('publications/', 'PublicationController@index')->name('publications');

Route::get('publications/{id}/show', 'PublicationController@show')->name('publications.show');
Route::get('publications/create', 'PublicationController@create')->name('publications.create');
Route::post('publications/store', 'PublicationController@store')->name('publications.store');

Route::get('admins', 'AdminController@index')->name('admins.index');

Route::get('admins/users', 'AdminController@blog_users')->name('admins.users');
Route::delete('admins/users/{id}', 'AdminController@destroy')->name('user.destroy');

Route::get('admins/publications', 'PublicationController@listpublication')->name('admins.publications');
Route::delete('admins/publications/{id}', 'PublicationController@destroy')->name('publications.destroy');

Route::get('admins/categories', 'CategoryController@index')->name('admins.categories');
Route::post('categories/store', 'CategoryController@store')->name('categories.store');
Route::delete('categories/{id}', 'CategoryController@destroy')->name('categories.destroy');

Auth::routes();

Route::get('users/home', 'HomeController@index')->name('home');
