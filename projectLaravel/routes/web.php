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



Route::resource('/article', 'ArticleController');
Route::resource('/comment', 'CommentsController');


Route::get('article/like/{id}', ['as' => 'article.like', 'uses' => 'LikeController@likeArticle']);

Route::get('/admin', ['as' => 'admin.index', 'uses' => 'AdminsController@index']);
Route::get('/admin/{article}', ['as' => 'admin.show', 'uses' => 'AdminsController@show']);
Route::get('/admin/commentaires/{comment}', ['as' => 'admin.showcomment', 'uses' => 'AdminsCommentsController@show']);






Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user', ['as' => 'user', 'uses' => 'UserController@index']);

Route::get('/contact',
    ['as' => 'contact', 'uses' => 'FormsController@create']);
Route::post('/contact',
    ['as' => 'contact_store', 'uses' => 'FormsController@store']);

Route::post('/article/{article}/comments', 'CommentsController@store');

Route::get('/image',
    ['as' => 'image.index', 'uses' => 'ImageController@index' ]);

Route::get('/image/upload',
    ['as' => 'image.upload', 'uses' => 'ImageController@upload' ]);

Route::post('/image',
    ['as' => 'image.store', 'uses' =>'ImageController@store' ]);

Route::get('/imagelist',
    ['as' => 'imagelist', 'uses' =>'ImageController@show' ]);
