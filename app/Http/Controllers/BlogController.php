<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Reply;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        $posts = Post::all();
        $categories = Category::all();
        $comments = Comment::all();
        $replies = Reply::all();

        $recents = Post::orderBy('updated_at','desc')->take(12)->get();

        //$banners = Post::orderBy('created_at', 'desc')->skip(1)->take(2)->get();
        return view('blog.index', compact('users', 'posts', 'categories', 'comments', 'replies', 'recents'));
    }

    public function post($slug)
    {
        $post = Post::findBySlug($slug);

        return view('post', compact('post'));
    }
}
