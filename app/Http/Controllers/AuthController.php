<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function showRegister(Request $request){
        return view("auth.register");
    }
    public function showLogin(Request $request){
        return view("auth.login");
    }
    public function register(Request $request){
        $validated = $request->validate([
            "name"=> "required|max:20",
            "email"=> "required|email|unique:users",
            "password"=> "required|string|confirmed|min:8"

        ]);
        $user = User::create($validated);

        Auth::login($user);
        return redirect("/marketplace");
    }
    public function login(Request $request){
        $validated = $request->validate([
            "email"=> "required|email",
            "password"=> "required|string"

        ]);
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect("/marketplace");
        }
        throw ValidationException::withMessages([
            "data"=>"incrorect user data",
        ]);
    }

    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
        return redirect("/");

    }
    

    

}
