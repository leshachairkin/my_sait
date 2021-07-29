<?php

namespace App\Http\Controllers;

use App\Viewed;
use Illuminate\Http\Request;
use App\News;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name = null)
    {
        $categoryName = 'Все новости';

        $news = News::join('categories', 'news.category_id', '=', 'categories.id');
        if ($name) {
            $news = $news->where('categories.url', $name);
            $category = Category::where('url', $name)->first();
            $categoryName = $category->name;

        }
        $news= $news->select(['news.*', 'categories.id as category_id', 'categories.name'])->paginate(1);

        return view('news.index', ['news' => $news, 'categoryName' => $categoryName]);

    }


    public function upload(Request $request)
    {

        $path = $request->file('image')->store('public/uploads');

        return view('admin/image', ['path' => str_replace('public', '', $path)]);
        $filename = storage_path('/uploads').'{$news->img_id}';
        return view('news.index', ['img_id', ['filename' => $filename]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $item)
    {
        $item->count_views++;
        $item->save();
        $viewed = Viewed::where('user_id', Auth::user()->id)->where('news_id', $item->id)->first();
        if(!$viewed){
            Viewed::create(['user_id'=> Auth::user()->id, 'news_id'=>$item->id]);
        }


        return view('news/show', ['item' => $item]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
