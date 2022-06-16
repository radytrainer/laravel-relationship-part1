<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


Route::get('users', [UserController::class, 'getUsers']);
Route::get('user_posts', [UserController::class, 'getUserAndPosts']);
Route::get('user_post_comments', [UserController::class, 'getUserPostAndComments']);
Route::post('users', [UserController::class, 'createUser']);



Route::get('posts', [PostController::class, 'getPosts']);
Route::get('post_comments', [PostController::class, 'getPostAndComments']);
Route::post('posts', [PostController::class, 'createPost']);


Route::post('comments', [CommentController::class, 'createComment']);
Route::get('comments', [CommentController::class, 'getComments']);
