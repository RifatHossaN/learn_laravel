<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){

        $posts = Auth::user()->posts()->latest()->paginate(6);

        return view('user.dashboard', ['posts'=>$posts]);
    }
}
