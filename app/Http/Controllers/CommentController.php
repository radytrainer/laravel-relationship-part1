<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    // Get comments
    public function getComments()
    {
        return Comment::all();
    }

    // Create a new comment
    public function createComment(Request $request)
    {
        $cmt = new Comment();
        $cmt->text = $request->text;
        $cmt->user_id = $request->user_id;
        $cmt->post_id = $request->post_id;
        $cmt->save();

        return response()->json(array('comment' => $cmt));
    }
}
