<?php

namespace App\Http\Controllers\scooll;

use App\Http\Controllers\Controller;
use App\lesson\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * Отображает список ресурсов
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('lesson/posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     * Выводит форму для создания нового ресурса
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lesson/posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * Помещает созданный ресурс в хранилище
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     * Отображает указанный ресурс.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('lesson/posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     * Выводит форму для редактирования указанного ресурса
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('lesson/posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     * Обновляет указанный ресурс в хранилище
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *  Удаляет указанный ресурс из хранилища
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'post deleted successfully');
    }
}
