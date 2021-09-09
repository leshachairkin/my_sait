<?php

namespace App\Http\Controllers;

use App\UserNews;
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
        $user_news->user_id = $request->user()->id;
        $user_news->userNews = $request->post('userNews');

          if ($request->hasFile('image')) {
            $request->file('image')->move(storage_path('app/public/uploads'), $request->file('image')->getClientOriginalName());

            $user_news->userImg_id = $request->file('image')->getClientOriginalName();
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

        $userNews = UserNews::select('category_id', 'userNews', 'userImg_id', 'created_at')->where('user_id', Auth::user()->id)->get();
        return view('auth/my_news', compact('userNews'));
    }



}
