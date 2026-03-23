<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

// afficher posts
public function index()
{

    $posts = Post::with('user')->latest()->get();

    return view('index',compact('posts'));

}


// create post
public function store(Request $request)
{

    $post = new Post();

    $post->content = $request->content;
    $post->user_id = session('user_id');

    $post->save();

    return redirect('/posts');

}


// edit page
public function edit($id)
{

    $post = Post::findOrFail($id);

    return view('edit',compact('post'));

}


// update
public function update(Request $request,$id)
{

    $post = Post::findOrFail($id);

    $post->content = $request->content;

    $post->save();

    return redirect('/posts');

}


// delete
public function destroy($id)
{

    $post = Post::findOrFail($id);

    $post->delete();

    return redirect('/posts');

}

}