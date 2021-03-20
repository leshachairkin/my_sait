<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comments;

class CommentController extends Controller
{


    public function store(Request $request) {

        $request->validate([
           'comment' => ['required']
        ]);

        $comment = new Comments();
        $comment->text = $request->post('comment');
        $comment->news_id = $request->post('news_id');
        $comment->user_id = $request->user()->id;
        $comment->save();

        return redirect()->back();


        return redirect('/news');

        return view('blocks/comment', ['text' => Comments::all()]);
        }



    public function show(Comments $id) {
//         $comments = Comments::all('id')->count();
//         return view('blocks/comment')->with($comments);
        return view('blocks/comment', ['id' => $id]);
    }
}
