<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class authController extends Controller
{
    //Register user
    public function register(Request $request){
        //validation
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email','unique:users'],
            'password' => ['required', 'min:6','confirmed']
        ]);

        //register user into db
        $user = User::create($fields);

        //log in
        Auth::login($user);

        //redirect
        return redirect()->route('welcome');

    }
}
