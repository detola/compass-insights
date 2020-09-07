<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::all();

        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = Auth::user();

        $data = [

            'post_id'=> $request->post_id,
            'photo_id' => $user->photo_id,
            'author' => $user->name,
            'email' => $user->email,
            'body' => $request->body,

        ];


        Comment::create($data);

        $request->session()->flash('comment_msg', 'Your comment has been added.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
        $posts = Post::findOrFail($id);

        $comments = Comment::all();

        return view('admin.comments.show', compact('posts', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }



    // $replies = Reply::all();

    //     return view('admin.replies.index', compact('replies'));






    // $user = Auth::user();

    //     $reply = [
    //         'comment_id' => $request->comment_id,
    //         'photo_id' => $user->photo_id,
    //         'author' => $user->name,
    //         'email' => $user->email,
    //         'body' => $request->body
    //     ];

    //     Reply::create($reply);

    //     $request->session()->flash('comment_msg', 'You reply has been posted');

    //     return redirect()->back();






    //return view('admin.comment.replies.show', compact('comments', 'replies'));
}
