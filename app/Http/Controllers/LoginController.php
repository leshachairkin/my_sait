<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
