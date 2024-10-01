<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class Controller
{
    // Home Page
    function home()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view("index", compact('posts', 'categories'));
    }
    public function post($slug)
    { {
            $post = Post::where('slug', $slug)->firstOrFail();

            return view('post', compact('post'));
        }
    }
}
