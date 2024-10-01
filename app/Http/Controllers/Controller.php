<?php

namespace App\Http\Controllers;

use App\Models\Post;

class Controller
{
    // Home Page
    function home()
    {
        $posts = Post::all();
        return view("index", compact('posts'));
    }
    public function post($slug)
    { {
            $post = Post::where('slug', $slug)->firstOrFail();

            return view('post', compact('post'));
        }
    }
}
