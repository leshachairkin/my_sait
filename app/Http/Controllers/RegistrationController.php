<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store(Request $request) {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);

        $user = User::create(request(['name','email','password']));

        auth()->login($user);

        return redirect()->to('/');
    }
}
