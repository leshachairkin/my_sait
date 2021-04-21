<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;

class PostController extends Controller
{
    public function index() {
   return view('admin/form', News::all());
    }

    public function create(Request $request) {

//       $request->validate([
//      'news' => ['required']
//       ]);
       $news_is = new News();
       $news_is->category_id = $request->post('category_id');
       $news_is->news = $request->post('news');
       $news_is->img_id = $request->post('img_id');
//       $news_is->name = $request->post('name');
       $news_is->save();

       return redirect()->back()->with('success', 'Новый пост добавлен');

       return view('admin/form');


    }


}
