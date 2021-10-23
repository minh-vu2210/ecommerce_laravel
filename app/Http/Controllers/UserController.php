<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;


class UserController extends Controller
{
    public function login(Request $req)
    {
        
        $user = User::where('email', '=', $req->email)->first();

        if ($user && Hash::check($req->password, $user->password)) {
            //Storing Session Data
            $req->session()->put('user',$user);
            return redirect('/');
        } else {
            return  redirect()->back()->withErrors(['Wrong Username or Password']);
        }
        // return $req ->input();
    }


    public  function logout(){
        Session::forget('user');
        return redirect('/');
    }
    public function register(){
        return view('register');
    }

    public function createAccount(Request $request)
    {
        $validated = $request ->validate([
            'username'=>['required','string','max:255'],
            'email'=>['required','string','max:255'],
            'password'=>['required','string',Password::min(8)->mixedCase()]
        ]);

        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

       return redirect('/login');
    }
}
