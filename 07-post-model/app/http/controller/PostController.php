<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
