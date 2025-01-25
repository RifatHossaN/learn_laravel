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

    public function login(Request $request){

        //validating the inputs
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required']
        ]);

        //attempting to log in
        if(Auth::attempt($fields, $request->remember)){
            return redirect()->intended('dashboard');
        }else{

            //returning login failed message
            return back()->withErrors(
                ['failed'=>"The Email and Password did'nt match"]
            );
        }
    }


    //LogOut User
    public function logout(Request $request){
        
        //logging out
        Auth::logout();

        //invalidating sessions
        $request->session()->invalidate();

        //regenarating CSRF token
        $request->session()->regenerateToken();

        //redirecting to the welcome/home page
        return redirect()->route('welcome');


    }
}
