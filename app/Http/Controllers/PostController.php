<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    public function __construct()
    {
        $posts = Post::all();
        View::share([
            "posts" => $posts
        ]);
    }
}
