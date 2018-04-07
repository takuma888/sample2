<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{

    public function __construct(){
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    public function create(){
        return view('sessions.create');
    }

    public function store(Request $request){

        $res = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($res, $request->has('remember'))) {
            if (Auth::user()->activated) {
                session()->flash('success', '欢迎回来');
                return redirect()->intended(route('users.show', Auth::user()));
            }else {
                Auth::logout();
                session()->flash('warning', '请检查邮件激活');
                return redirect('/');
            }
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
