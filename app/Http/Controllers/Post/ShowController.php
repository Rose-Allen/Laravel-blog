<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShowController extends Controller
{
    public function __invoke(Post $post, Tag $tag)
    {

        $data = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id','!=', $post->id)
            ->get()
            ->take(3);

        return view('post.show', compact('post', 'data','relatedPosts'));
    }
}
