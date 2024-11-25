<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return view('users.index');
    }

    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        $fields = $request->validate([
            "username"=> "required|max:100",
            "email" => "required|max:100|email",
            "password" => "required|min:5|max:100|confirmed"
        ]);

        $user = User::create($fields);

        Auth::login($user);

        return redirect(route('user.index'))->with('success', 'Successfully created a user.');
    }

    public function loginview() {
        return view('users.login');
    }

    public function login(Request $request){
        $fields = $request->validate([
            "email" => "required|max:100",
            "password" => "required|min:5|max:100",
        ]);

        if(Auth::attempt($fields, $request->remember)){
            return redirect()->intended();
        }else{
            return back()->withErrors(['failed' => 'User credentials not accepted.']);
        }
    }

    public function logout(Request $request){
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->route('user.login');
    }
}
