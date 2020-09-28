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

Route::get('/', 'PageController@index')->name('home');
Route::get('/lang/{locale}', function($locale){
	session(['locale'=>$locale]);
	return back();
});

//products
Route::get('/products/{category?}/{id?}', 'ProductController@products')->name('products');
Route::get('/product/{id}', 'ProductController@product_view')->name('product_view');
Route::get('/sort/products/{key}', 'ProductController@products_sort')->name('products_sort');
Route::post('/product_search', 'ProductController@product_search');

//posts
Route::get('/posts/{category?}/{id?}', 'PostController@posts')->name('posts');
Route::post('/post_search', 'PostController@post_search');
Route::get('/post/{slug}', 'PostController@post_view')->name('post_view');
Route::post('/posts_sort', 'PostController@posts_sort')->name('posts_sort');
Route::post('/add_comment', 'PostController@add_comment')->name('add_comment');

//pages
Route::get('/aboutUs', 'PageController@aboutUs')->name('aboutUs');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/questions', 'PageController@questions')->name('questions');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/thoughts', 'PageController@thoughts')->name('thoughts');
Route::get('/search', 'PageController@search')->name('search');


Route::get('/question/{id}', 'PageController@question_view')->name('question_view');
Route::get('/questions/category/{id}', 'PageController@questions_category')->name('questions_category');


// ajax

Route::post('/about_pages', 'PageController@about_pages');
Route::post('/send_message', 'MessageController@send_message');
Route::post('/get_product', 'ProductController@get_product');
Route::post('/send_zakas', 'ProductController@send_zakas');
Route::post('/send_question', 'MessageController@send_question');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
