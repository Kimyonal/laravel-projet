<?php

namespace App\Http\Controllers;

use App\Models\Like;

class LikeController extends Controller
{

public function like($id)
{

Like::create([
'user_id'=>session('user_id'),
'post_id'=>$id
]);

return back();

}

}