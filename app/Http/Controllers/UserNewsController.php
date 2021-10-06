<?php

namespace App\Http\Controllers;

use App\UserNews;
use App\News;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class UserNewsController extends Controller
{

    public function index() {
        return view('auth/add_news');
    }



    public function store(Request $request) {

        $user_news = new UserNews();

        $user_news->category_id = $request->post('category_id');
        $user_news->name_id = $request->user()->id;
        $user_news->news = $request->post('news');

          if ($request->hasFile('image')) {
            $request->file('image')->move(storage_path('app/public/uploads'), $request->file('image')->getClientOriginalName());

            $user_news->img_id = $request->file('image')->getClientOriginalName();
        }
        $user_news->save();

        return redirect()->route('my_news.view')->with('success', 'пост добавлен');
    }

    public function show(UserNews $userNews) {

        $userNews = UserNews::latest()->paginate(10);
//          $userNews = UserNews::all();
        return view('admin/UserNews/unews', compact('userNews'));

    }

    public function edit(UserNews $userNews) {
        return view('admin/UserNews/view_news', compact('userNews'));
    }

    public function userView(UserNews $userNews) {
//
        $userNews = UserNews::select('category_id', 'news', 'img_id', 'created_at', 'name_id')->where('name_id', Auth::user()->id)->get();
        return view('auth/my_news', compact('userNews'));
    }

    public function category()
    {
        $categories = Category::all();

        return view('auth/add_news', ['news' => News::all(), 'categories' => $categories]);

    }

    public function ViewsNews(Request $request) {

        if($request->has('news_id')) {
            $userNews = UserNews::find($request->post('news_id'));
//            if ($userNews->news_views == 1) {
                $userNews->news_views = !$userNews->news_views;
//            } else {
//                $userNews->news_views = 1;
//            }

            $userNews->save();
        }

        return redirect()->back();

    }



}
