<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comments;
use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $latestNews = News::orderBy('id', 'DESC')->where('news_views', 1)->paginate(15);
        $topNews = News::orderBy('count_views', 'DESC')->where('news_views', 1)->limit(5)->get();
        $commentMenu = Comments::orderBy('text', 'DESC')->limit(10)->get();



        return view('blocks.app', ['latestNews' => $latestNews, 'topNews'=>$topNews, 'commentMenu' =>$commentMenu]);

    }
    public function show($id) {


    }
}

