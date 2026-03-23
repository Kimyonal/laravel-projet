<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

// afficher register
public function showRegister()
{
    return view('register');
}

// enregistrer user
public function register(Request $request)
{

    $user = new User();

    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);

    $user->save();

    return redirect('/login');

}

// afficher login
public function showLogin()
{
    return view('login');
}

// login
public function login(Request $request)
{

    $user = User::where('email',$request->email)->first();

    if($user && Hash::check($request->password,$user->password))
    {

        session([
            'user_id'=>$user->id,
            'user_name'=>$user->name
        ]);

        return redirect('/posts');

    }

    return back()->with('error','Email ou password incorrect');

}

// logout
public function logout()
{
    session()->flush();
    return redirect('/login');
}}