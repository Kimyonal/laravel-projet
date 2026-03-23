<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{

public function like(Request $request)
{

    $like = new Like();

    $like->user_id = session('user_id');
    $like->post_id = $request->post_id;

    $like->save();

    return response()->json([
        'message'=>'liked'
    ]);
}}