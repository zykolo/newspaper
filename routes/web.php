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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'dashController@index');
/* 
---------------------------------------------------------------------------
    Category Routes Section
---------------------------------------------------------------------------
*/
Route::get('/dashboard/add-category', 'categoryController@index');
Route::post('/add-category', 'categoryController@insert');

/* 
---------------------------------------------------------------------------
    Post Routes Section
---------------------------------------------------------------------------
*/
Route::post('/add-post', 'postController@insert');
Route::get('/dashboard/add-post', 'postController@index');

/* 
---------------------------------------------------------------------------
    Image Upload Routes
---------------------------------------------------------------------------
*/
Route::post('/image_upload', 'imageController@upload')->name('upload');

/* 
---------------------------------------------------------------------------
    Single Post Routes
---------------------------------------------------------------------------
*/
Route::get('/single_post/{id}/{post_url}', 'singleController@index');
/* 
---------------------------------------------------------------------------
    Comment Routes
---------------------------------------------------------------------------
*/
Route::post('/comment', 'commentController@insert');