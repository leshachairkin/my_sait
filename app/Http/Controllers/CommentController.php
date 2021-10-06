<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Comments;
use SebastianBergmann\CodeCoverage\TestFixture\C;

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

   public function replyStory(Request $request, News $news) {

//        $replys = new Comments();

        $replys = Comments::where('user_id',Auth::user()->id)->first();
        if ($replys) {
            $replys->reply = $request->post('reply');
            $replys->save();
        }

        return redirect()->route('admin.create')->with('success', 'Answer');
   }


   public function ReplyInt(Comments $request) {
//       $replyse = Comments::where('reply',Auth::user()->id)->get();
//       return view('admin/Comments/views', compact('replyse'));

       return view('admin/Comments/views', ['reply' => $request->user()]);
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

    public function createCommit(Comments $comment) {
        return view('admin/Comments/form', compact($comment));

    }
    public function storeCommit(Request $request,Comments $comment) {
//        $request->validate([
//            ''
//        ]);
        $comment->text = $request->post('comment');

        $comment->save();

        return redirect()->route('commit');
    }

    public function ReplyC(Request $request,Comments $comment) {

        $comment = Comments::where('user_id',Auth::user()->id)->first();
        if ($comment) {
            $comment->reply = $request->post('reply');
            $comment->save();
        }

        return redirect()->back();
    }


}
