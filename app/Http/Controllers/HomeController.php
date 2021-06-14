<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $latestNews = News::orderBy('id', 'DESC')->limit(6)->get();


        return view('blocks.app', ['latestNews' => $latestNews]);
    }
    public function show($id) {


    }
}

