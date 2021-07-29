<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.form', ['news' => News::all(), 'categories' => $categories]);

    }

    public function create()
    {
        return view('admin/form');
    }
    

    public function store(Request $request)
    {

//       $request->validate([
//      'news' => ['required']
//       ]);
//        dd($request->all(), $request->allFiles());
        $news_is = new News();
        $news_is->category_id = $request->post('category_id');
        $news_is->news = $request->post('news');
        if ($request->hasFile('image')) {
            $request->file('image')->move(storage_path('app/public/uploads'), $request->file('image')->getClientOriginalName());

            $news_is->img_id = $request->file('image')->getClientOriginalName();
        }

//       $news_is->name = $request->post('name');
        $news_is->save();
//      return view('admin/form');

//       return redirect()->back()->with('success', 'Новый пост добавлен');
        return redirect()->route('post.show')->with('success', 'Новый пост добавлен');

    }

    public function show(News $news)
    {

        $news = News::latest()->paginate(7);
//        $news = News::orderBy('id', 'DESC')->limit(4)->get();
        return view('admin/newsis', ['news' => $news]);


    }

    public function edit(News $news) {
        return view('admin/edit', compact('news'));
    }


    public function update(Request $request, News $news)
    {
        $request->validate([
//            'category' => 'required',
            'news' => 'required',
        ]);
        $news->update($request->all());

        if ($request->hasFile('image')) {
            $request->file('image')->move(storage_path('app/public/uploads'), $request->file('image')->getClientOriginalName());

            $news->img_id = $request->file('image')->getClientOriginalName();
        }

        $news->save();

        return redirect()->route('post.show')->with('success', 'сообщение успешно обновлено');
    }

    public function destroy(News $news)
    {
//        $posts = News::findOrFail();
        $news->delete();
        return redirect()->route('post.show')->with('success', 'Сообщение успешно удалено');


    }
    public function views(News $news) {
        return view('admin/show', compact('news'));
    }

////   public function addCategory(Request $request, Category $category) {
////            $request->validate([
//////                'name' => 'required',
////            ]);
////       Category::create($request->all());
//////       return view('admin/index', compact('category'));
////       return redirect()->route('admin/index')->with('success', 'Category created successfully.');
//   }

    public function addCategory(Request $request) {

        if($request->isMethod('get')){
            return view('admin/index');
        }


//        $category = new Category();
//        $category->name = $request->post('name');
//        $category->url = $request->post('url');


        $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);
        Category::create($request->all());
//        $category->save();


        return redirect()->route('post.category')->with('success', 'Category created successfully.');

    }



}
