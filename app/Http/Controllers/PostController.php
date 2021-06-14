<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index() {
        $categories = Category::all();
   return view('admin/form', ['news' =>News::all(), 'categories'=>$categories]);
    }

    public function create(Request $request) {

//       $request->validate([
//      'news' => ['required']
//       ]);
//        dd($request->all(), $request->allFiles());
       $news_is = new News();
       $news_is->category_id = $request->post('category_id');
       $news_is->news = $request->post('news');
        if($request->hasFile('image')){
            $request->file('image')->move(storage_path('app/public/uploads'), $request->file('image')->getClientOriginalName());

            $news_is->img_id = $request->file('image')->getClientOriginalName();
        }

//       $news_is->name = $request->post('name');
       $news_is->save();


       return redirect()->back()->with('success', 'Новый пост добавлен');

       return view('admin/form');


    }


}
