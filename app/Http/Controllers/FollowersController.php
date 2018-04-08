<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FollowersController extends Controller
{
    //
    public function destroy(User $u){
        if (Auth::user()->id === $u->id) {
            return redirect('/');
        }
        Auth::user()->unfollow($u->id);
        return redirect()->back();
    }

    public function store(User $u){
        if (Auth::user()->id === $u->id) {
            return redirect('/');
        }
        Auth::user()->follow($u->id);
        return redirect()->back();
    }
}
