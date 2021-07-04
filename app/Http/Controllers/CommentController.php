<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Users;
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

  public function indexCommit(Comments $id) {
        $comment = Comments::all();
        return view('admin/Comments/commit', compact('comment'));
    }

    public function showCommit( Comments $comment) {
        return view('admin/Comments/show',  compact('comment'));

    }

    public function destroy(Comments $comment) {
        $comment->delete();

        return redirect()->route('commit')->with('success', 'Комментарий удолен');
    }

    public function createCommit() {
        return view('admin/Comments/form');

    }
    public function storeCommit(Request $request,Comments $comment) {
//        $request->validate([
//            ''
//        ]);
        $comment->text = $request->post('comment');

        $comment->save();

        return redirect()->route('commit');
    }
}
