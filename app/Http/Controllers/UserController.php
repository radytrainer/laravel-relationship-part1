<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    // Get users
    public function getUsers()
    {
        return User::all();
    }

    // Get users and posts
    public function getUserAndPosts()
    {
        return User::with('posts')->get();
    }

    // Get users, posts and comments
    public function getUserPostAndComments()
    {
        return User::with('posts','posts.comments')->get();
    }

    // create a new user
    public function createUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(['message' => 'Successfully created a new user.']);
    }
}
