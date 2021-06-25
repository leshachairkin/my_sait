<?php

namespace App\Http\Controllers;

use App\User;
use App\Users;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class LoginController extends Controller
{
    public function create() {
        return view('auth.login');
    }
    public function store(Request $request) {
        if (auth()->attempt(request(['email','password'])) ==false) {
            return back()->withErrors([
                'message'=>'Электронная почта или пароль неверный, попробуйте еще раз'
            ]);

        }
        return redirect()->to('/');
    }

    public function destroy() {
        auth()->logout();

        return redirect()->to('/');
    }

    public function index() {
//        $name = Auth::user();
            $name = Users::select('name', 'email')->where('id', Auth::user()->id)->get();
            return view('auth/personal', ['email' => $name, 'name' => $name]);

//        $name = Users::all();
//        return view('auth/personal', ['email'=> $name,'name' => $name]);

    }

    public function update(Request $request, Users $name) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $name->update($request->all());

        $name->save();

        return redirect()->route('personal', ['data'])->with('success','сообщение успешно обновлено');

//       return view('auth/personal',['name'=>$name->name, 'email'=>$name->email]);
    }

    public function edit(Users $name) {

        return view('auth/personal', compact('name'));
    }

    public function show(Request $request) {
        return view('auth/form',  ['name'=>$request->user()]);


    }

 public function avatar(Request $request, Users $name) {

//        $request->validate([
//            'avatar' => 'required',
//        ]);
     $name = new Users();
         $request->hasFile('image');
              $request->file('image')->move(storage_path('app/public/foto'), $request->file('image')->getClientOriginalName());


              $name->avatar = $request->file('image')->getClientOriginalName();

       $name->save();

//           return view('auth/personal', ['avatar' => $name]);

     return redirect()->route('personal')->with('success', 'Post created successfully.');
 }

// public function avatarshow() {
//
// }

}
