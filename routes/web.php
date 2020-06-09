<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

use function GuzzleHttp\json_decode;

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


Route::get('api', function(){

    $client = new Client();
    $res = $client->request('GET', 'https://sq1-api-test.herokuapp.com/posts');

    if( $res->getStatusCode() == "200"){
    
        $publications = json_decode( $res->getBody()->getContents() );
        $user = App\User::where('email', 'admin.api@miniblog.com')->first();
        $category = App\Category::where('name', 'Articles')->first();
        

        foreach ($publications->data as $key => $publication) {
            
            $new_publication = new App\Publication();
            $new_publication->user_id = $user->id;
            $new_publication->title = $publication->title;
            $new_publication->category_id = $category->id;
            $new_publication->description = $publication->description;
            $new_publication->created_at = $publication->publication_date;
            $new_publication->save();

        }

    }
    
});
