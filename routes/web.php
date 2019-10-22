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

Route::get('/', 'HomeController')->name('home');
Route::get('portfolio', 'ProjectsController@index')->name('portfolio');
Route::get('project/{project}', 'ProjectsController@show')->name('project');
Route::get('contact', 'ContactController@show')->name('contact');
Route::post('contact', 'ContactController@store')->name('contact.store');
Route::get('blog', 'PostsController@index')->name('blog');
Route::get('blog/categories/{category}', 'PostCategoriesController@show')->name('category');
Route::get('blog/tags/{tag}', 'PostTagsController@show')->name('tag');
Route::get('blog/{post}', 'PostsController@show')->name('post');
