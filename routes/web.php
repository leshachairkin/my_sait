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

Route::get('auth/personal', 'LoginController@index')->name('personal');
Route::post('auth/personal/edit', 'LoginController@edit')->name('personal.edit');
Route::put('auth/form/{name}', 'LoginController@update')->name('personal.update');
Route::get('auth/form/', 'LoginController@show')->name('personal.show');
Route::post('auth/personal', 'LoginController@index');
Route::post('auth/personal/', 'LoginController@avatar')->name('personal.avatar');
Route::get('auth/comments', 'LoginController@indexComments')->name('comments');
Route::get('auth/newse', 'LoginController@newsesViews')->name('newse');
//Route::get('auth/image_s', 'LoginController@avatar')->name('image_s.avatar');

Route::get('auth/image_s', function () {
    return view('auth/image_s');
})->name('image_s.avatar');

//Route::get('auth/my_news', function () {
//    return view('auth/my_news');
//})->name('my_news');

Route::post('auth/add_news','UserNewsController@store')->name('add_news.store');
Route::get('auth/add_news','UserNewsController@index')->name('add_news');
Route::get('auth/my_news', 'UserNewsController@userView')->name('my_news.view');


//Route::get('auth/personal{avatar}','LoginController@avatarView')->name('avatar');
//Route::delete('auth/personal{avatar}', 'LoginController@deleteAvatar')->name('delete.avatar');


//Route::get('auth/form/', 'LoginController@form')->name('personal.form');



Route::get('/auth/menu', function () {
    return view('auth/menu');
})->name('menu');








Route::get('blocks/comment{$id}', 'CommentController@show');
Route::post('blocks/comment', 'CommentController@store')->name('comment.store');
Route::get('blocks/comment',  'CommentController@index');








Route::get('/admin/image', function () {
    return view('admin/image');
})->name('image');

Route::get('/admin/panel', function () {
    return view('admin/panel');
})->name('panel');

//Route::get('/admin/UserNews/unews', function () {
//    return view('admin/UserNews/unews');
//})->name('unews');

//Route::get('/admin/UserNews/view_news', function () {
//    return view('admin/UserNews/view_news');
//})->name('view_news');




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


Route::get('admin/Comments/commit', 'CommentController@indexCommit')->name('commit');
Route::delete('admin/Comments/commit{comment}', 'CommentController@destroy')->name('commit.destroy');
Route::get('admin/Comments/commit/{comment}', 'CommentController@showCommit')->name('commit.show');
Route::get('admin/Comments/form','CommentController@createCommit')->name('admin.create');
Route::get('admin/users',   'LoginController@usersView')->name('users');
Route::post('admin/Comments/commit', 'CommentController@storeCommit')->name('commit.store');
Route::post('admin/Comments/form', 'CommentController@replyStory')->name('commit.reply');
Route::get('admin/Comments/views{replase}','CommentController@ReplyInt')->name('viewses');


Route::get('admin/UserNews/unews', 'UserNewsController@show')->name('unews.show');

Route::get('admin/UserNews/view_news{userNews}', 'UserNewsController@edit')->name('view_news.edit');

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
