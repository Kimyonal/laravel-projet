<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
{
    $user = User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password)
    ]);

    session(['user_id'=>$user->id]);

    return redirect('/posts');
}
public function login(Request $request)
{
    $user = User::where('email',$request->email)->first();

    if($user && password_verify($request->password,$user->password)){
        session(['user_id'=>$user->id]);
        return redirect('/posts');
    }

    return back()->with('error','Login incorrect');
    
}
public function logout()
{
    session()->forget('user_id');
    return redirect('/login');
}}
