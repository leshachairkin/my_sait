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

Route::get('/', 'HomeController@index')->name('app');
//Route::get('blocks/menu/{id}', 'HomeController@show');


Route::get('/auth.register', function () {
    return view('auth.register');
})->name('register');

Route::get('/auth/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/blocks/default', function () {
    return view('blocks/default');
})->name('default');

//Route::get('/auth/personal', function () {
//    return view('auth/personal');
//})->name('personal');



//Route::get('/news/{name}',    'NewsController@index')->name('news.category');

 Route::get('/news',    'NewsController@index')->name('news');
 Route::get('/news/{name}',    'NewsController@index')->name('news.category');
Route::get('/news/show/{item}', 'NewsController@show');
// Route::get('/blocks/menu/',    'NewsController@index');
 Route::get('/blocks/menu/{id}', 'NewsController@show');
Route::post('/image/upload', 'NewsController@upload')->name('image.upload');

//Route::get('/blocks/menu/',     'MenuController@index');

Route::get('auth/register', 'RegistrationController@creat')->name('register.get');
Route::post('auth/register', 'RegistrationController@store')->name('register.store');


//Route::resource('auth/', LoginController::class);
Route::get('auth/login', 'LoginController@create')->name('login.create');
Route::post('auth/login', 'LoginController@store')->name('login.store');
Route::get('/logout', 'LoginController@destroy');

Route::get('auth/personal/', 'LoginController@index')->name('personal');
Route::post('auth/personal/edit', 'LoginController@edit')->name('personal.edit');
Route::put('auth/form/{name}', 'LoginController@update')->name('personal.update');
Route::get('auth/form/', 'LoginController@show')->name('personal.show');
//Route::post('auth/personal', 'LoginController@index');
Route::post('auth/personal/', 'LoginController@avatar')->name('personal.avatar');
//Route::get('auth/form/', 'LoginController@form')->name('personal.form');


Route::get('blocks/comment{$id}', 'CommentController@show');
Route::post('blocks/comment', 'CommentController@store')->name('comment.store');
Route::get('blocks/comment',  'CommentController@index');

Route::get('/admin/panel', function () {
    return view('admin/panel');
})->name('panel');


Route::get('/admin/image', function () {
    return view('admin/image');
})->name('image');





Route::resource('admin/', PostController::class);
Route::post('admin/form',  'PostController@index');
Route::get('admin/newsis','PostController@show')->name('post.show');
Route::delete('admin/newsis{news}','PostController@destroy')->name('post.destroy');
Route::get('admin/edit{news}', 'PostController@edit')->name('post.edit');
Route::post('/admin/', 'PostController@store')->name('post.store');
Route::get('/admin/form', 'PostController@create')->name('post.create');
Route::put('/admin/form{news}', 'PostController@update')->name('post.update');
Route::post('admin/form',  'PostController@index')->name('post.index');
Route::get('admin/show{news}',  'PostController@views')->name('post.views');
Route::post('admin/index',  'PostController@addCategory')->name('post.category');
Route::get('admin/index/',  'PostController@addCategory');



//Route::resource('lesson/posts/',scooll\PostController::class);
//
//Route::get('lesson/layout/app', function () {
//    return view('lesson/layout/app');
//})->name('app');
//
//Route::get('lesson/posts/index', 'scooll\PostController@index');
//Route::get('lesson/posts/create', 'scooll\PostController@create')->name('posts.create');
//Route::post('lesson/posts', 'scooll\PostController@store')->name('posts.store');
//Route::get('lesson/posts/{post}/edit', 'scooll\PostController@edit')->name('posts.edit');
//Route::get('lesson/posts/{post}', 'scooll\PostController@show')->name('posts.show');
//Route::delete('lesson/posts/{post}', 'scooll\PostController@destroy')->name('posts.destroy');
//Route::put('lesson/posts/{post}', 'scooll\PostController@update')->name('posts.update');
//Route::post('lesson/posts/index', 'scooll\PostController@index')->name('posts.index');
