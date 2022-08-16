<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        $likedPosts = Post::withCount('likedUser')->orderBy('liked_user_count', 'DESC')->get();
        $postRandoms = Post::get()->random(4);
        $posts = Post::paginate(6);
        return view('post.index', compact('posts', 'postRandoms', 'likedPosts'));
    }
}