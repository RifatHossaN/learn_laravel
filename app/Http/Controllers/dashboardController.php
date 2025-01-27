<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller implements HasMiddleware
{

    //added middleware
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['userPosts']),
        ];
    }
    public function index(){

        $posts = Auth::user()->posts()->latest()->paginate(6);

        return view('user.dashboard', ['posts'=>$posts]);
    }

    public function userPosts(User $user){

        $posts = $user->posts()->latest()->paginate(6);

        return view('user.posts', ['posts'=>$posts, 'username'=>$user->username]);
    }
}
