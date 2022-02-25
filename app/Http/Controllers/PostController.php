<?php

namespace App\Http\Controllers;

use App\Models\Post;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();

        return view('posts', compact('posts'));
    }
}
