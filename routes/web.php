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

Route::get('/', function () {
    return view('blocks.app');
})->name('app');


 Route::get('/news.hitech', function () {
 $news = DB::table('news')->get();
 return view('news/hitech', ['news'=>$news]);
   // return view('news.hitech');
 })->name('hitech');


Route::get('/news.culture', function () {
    return view('news.culture');
})->name('culture');

 // Route::get('/news.business', function () {
 //  $news = DB::table('news')->get();
 // //return view('news.business', compact('news'));
 //  return view('news/business', ['news'=>$news]);
 // })->name('business');


Route::get('/news.politics', function () {
    return view('news.politics');
})->name('politics');

Route::get('/auth.login', function () {
    return view('auth.login');
})->name('login');

 
 Route::get('/news',     'NewsController@index')->name('business');
 Route::get('/news/{id}', 'NewsController@show');
 

/*

Route::get('/news.index', function () {
	$news = DB::table('news')->get();
	return view('/news.index', compact('news'));
});

Route::group(['prefix'=>'news'], function () {
  Route::get('/news',     'NewsController@index')->name('news.index');
  Route::get('/news/{id}', 'NewsController@show')->name('news.show');
});

/*
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/submit', function () {
    return "okey";
});

Route::get('/news.index', function () {
	$news = DB::table('news')->get();
	return view('/news.index', compact('news'));
});



Route::get('/news.index', function () {
	$news = DB::table('news')->get();
	return view('news.index', compact('news'));
});



/*
Route::get('/news.index', function () {
	$news = DB::table('news')->get();
	return view('news.index', compact('news'));
});
*/
// Route::get('/news/',     'NewsController@index');
// Route::get('/news/{id}', 'NewsController@show');

  // Route::get('/news', [NewsController::class, 'index']);
   //Route::get('/news{id}', [NewsController::class, 'show']);

/*


Route::get('/', function () {
   return view('index');
});

Route::get('/', function () {
   return view('show');
});

  
  Route::get('/',   'TaskController@index');

  Route::get('/tasks/{id}', 'TaskController@show');
  Route::post('/tasks/',   'TaskController@save');
   Route::get('/tasks/',   'TaskController@save');
  Route::get('/tasks/{id}',   'TaskController@destroy');
// Route::get('/',   'NewsController@index');
*/