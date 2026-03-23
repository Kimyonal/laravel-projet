<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

public function index()
{

$posts = Post::with('user','likes')->latest()->get();

return view('posts.index',compact('posts'));

}

public function store(Request $request)
{

Post::create([
'content'=>$request->content,
'user_id'=>session('user_id')
]);

return back();

}

public function update(Request $request,Post $post)
{

$this->authorize('update',$post);

$post->update([
'content'=>$request->content
]);

return back();

}

public function destroy(Post $post)
{

$this->authorize('delete',$post);

$post->delete();

return back();

}

}