<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//     return view('welcome');
// });



Route::get('/', 'HomeController@index')->name('home');
Route::get('/formulario', 'HomeController@formulario')->name('formulario');
/* Route::get('/post/{numLib}', 'HomeController@id')->name('postId');
Route::get('/post/userPdf', 'HomeController@userPdf')->name('postuserPdf'); */

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

/* Route::get('/admin/categories', 'Admin\CategoriesController@index')->name('admin.categories.index'); */
/* Route::post('/admin/categories/store', 'Admin\CategoriesController@store')->name('admin.categories.store');
Route::post('/admin/categories/{categoryId}/update', 'Admin\CategoriesController@update')->name('admin.categories.update');
Route::delete('/admin/categories/{categoryId}/delete', 'Admin\CategoriesController@delete')->name('admin.categories.delete'); */


/* Route::get('/admin/posts', 'Admin\PostsController@index')->name('admin.posts.index'); */
/* Route::post('/admin/posts/store', 'Admin\PostsController@store')->name('admin.posts.store');
Route::post('/admin/posts/{postId}/update', 'Admin\PostsController@update')->name('admin.posts.update');
Route::delete('/admin/posts/{postId}/delete', 'Admin\PostsController@delete')->name('admin.posts.delete'); */

Route::get('/admin/citas', 'CitasController@index')->name('admin.citas.index');
Route::post('/admin/citas/store', 'CitasController@index')->name('admin.citas.store');
//Route::post('/admin/citas/{citas}/update', 'CitasController@index')->name('admin.citas.update');
//Route::delete('/admin/citas/{citas}/delete', 'CitasController@index')->name('admin.citas.delete');

Route::get('/admin/servicios', 'ServiciosController@index')->name('admin.servicios.index');
Route::post('/admin/servicios/store', 'ServiciosController@store')->name('admin.servicios.store');
Route::post('/admin/servicios/{servicioId}/update', 'ServiciosController@update')->name('admin.servicios.update');
Route::delete('/admin/servicios/{servicioId}/delete', 'ServiciosController@delete')->name('admin.servicios.delete');

Route::get('/admin/sucursales', 'SucursalesController@index')->name('admin.sucursales.index');
Route::post('/admin/sucursales/store', 'SucursalesController@store')->name('admin.sucursales.store');
Route::post('/admin/sucursales/{sucursales}/update', 'SucursalesController@update')->name('admin.sucursales.update');
Route::delete('/admin/sucursales/{sucursales}/delete', 'SucursalesController@delete')->name('admin.sucursales.delete');
Auth::routes();
