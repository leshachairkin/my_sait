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



Route::get('/auth.register', function () {
    return view('auth.register');
})->name('register');

Route::get('/auth/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/blocks/default', function () {
    return view('blocks/default');
})->name('default');





 Route::get('/news',    'NewsController@index')->name('news');
 Route::get('/news/{name}',    'NewsController@index')->name('news.category');
Route::get('/news/show/{item}', 'NewsController@show');
// Route::get('/blocks/menu/',    'NewsController@index');
 Route::get('/blocks/menu/{id}', 'NewsController@show');
Route::post('/image/upload', 'NewsController@upload')->name('image.upload');

//Route::get('/blocks/menu/',     'MenuController@index');

Route::get('auth/register', 'RegistrationController@creat')->name('register.get');
Route::post('auth/register', 'RegistrationController@store')->name('register.store');

Route::get('auth/login', 'LoginController@create')->name('login.create');
Route::post('auth/login', 'LoginController@store')->name('login.store');
Route::get('/logout', 'LoginController@destroy');


Route::get('blocks/comment{$id}', 'CommentController@show');
Route::post('blocks/comment', 'CommentController@store')->name('comment.store');
Route::get('blocks/comment',  'CommentController@index');

Route::get('/admin/panel', function () {
    return view('admin/panel');
})->name('panel');

//Route::post('/admin/form', function () {
//    return view('admin/form');
//})->name('form.create');

//Route::get('/admin/home', function () {
//    return view('admin/home');
//})->name('home');

Route::get('/admin/image', function () {
    return view('admin/image');
})->name('image');

Route::get('admin/form',  'PostController@index');
Route::post('/admin/form', 'PostController@create')->name('form.create');
