<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    // Get posts
    public function getPosts()
    {
        return Post::all();
    }
    // Get Post with their comments
    public function getPostAndComments()
    {
        return Post::with('comments')->get();
    }
    // Create a new post
    public function createPost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $request->user_id;
        $post->save();

        return response()->json(array('post' => $post));
    }
}
