<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){

        $posts = Auth::user()->posts()->latest()->paginate(6);

        return view('user.dashboard', ['posts'=>$posts]);
    }

    public function userPosts(User $user){

        $posts = $user->posts()->latest()->paginate(6);

        return view('user.posts', ['posts'=>$posts, 'username'=>$user->username]);
    }
}
