<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{
    //
    public function create(){
        return view('sessions.create');
    }

    public function store(Request $request){

        $res = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($res, $request->has('remember'))) {
            session()->flash('success', '欢迎回来');
            return redirect()->route('users.show', Auth::user());
        }else {
            session()->flash('danger', '不好意思，错了');
            return redirect()->back();
        }

    }

    public function destroy(){
        Auth::logout();
        session()->flash('success', '再见');
        return redirect()->route('login');
    }
}
