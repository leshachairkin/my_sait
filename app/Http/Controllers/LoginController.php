<?php

namespace App\Http\Controllers;

use App\Comments;
use App\News;
use App\User;
use App\Users;
use App\Viewed;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;
use function GuzzleHttp\Promise\all;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Электронная почта или пароль неверный, попробуйте еще раз'
            ]);

        }
        return redirect()->to('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }

    public function index()
    {
        return view('auth/personal');
    }

    public function update(Request $request, Users $name)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $name->update($request->all());

        $name->save();

        return redirect()->route('personal', ['data'])->with('success', 'сообщение успешно обновлено');

//       return view('auth/personal',['name'=>$name->name, 'email'=>$name->email]);
    }

    public function edit(Users $name)
    {

        return view('auth/personal', compact('name'));
    }

    public function show(Request $request)
    {
        return view('auth/form', ['name' => $request->user()]);


    }

    public function avatar(Request $request)
    {

//        $request->validate([
//            'avatar' => 'required',
//        ]);
        $avatar = User::where('id', Auth::user()->id)->first();
        if($request->hasFile('image')) {
            $request->file('image')->move(storage_path('app/public/avatars'), $request->file('image')->getClientOriginalName());


            $avatar->avatar_id = $request->file('image')->getClientOriginalName();

            $avatar->save();
        }

//           return view('auth/personal', ['avatar' => $name]);

        return redirect()->route('personal')->with('success', 'Post created successfully.');
    }

    public function newsesViews(Viewed $viewed) {

        $viewed = Viewed::where('user_id', Auth::user()->id)->get();
//        $viewed = Viewed::join('viewed_all', 'viewed_all.news.id', '=', 'news.id')->where('viewed_all.user_id', Auth::user()->id)->select([DB::raw("news.*")]);
        return view('auth/newse', compact('viewed'));
    }


//    public function avatarView()
//    {
//
//        $avatar = Users::where('avatar', Auth::user()->id)->get();
//        return view('auth/personal', compact('avatar'));
//    }

//public function deleteAvatar(Users $avatar) {
//        $avatar->delete();
//
//        return redirect()->route('personal')->with('success', 'Avatar delete');
//}

    public function usersView()
    {

        $users = Users::latest()->paginate(10);
        return view('admin/users', ['users' => $users]);
    }

    public function indexComments(Comments $comment)
    {

        $comment = Comments::select('text', 'news_id', 'reply')->where('user_id', Auth::user()->id)->get();
        return view('auth/comments', compact('comment'));
    }


}
