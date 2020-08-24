<?php

namespace App\Http\Controllers;

use App\ThreadComment;
use Illuminate\Http\Request;
use App\Thread;

class ThreadCommentController extends Controller
{
    
    public function addThreadComment(Request $request, Thread $thread)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $comment = new ThreadComment();
        $comment->body = $request->body;
        $comment->user_id = auth()->user()->id;
        //$comment->commentable_id = $
        //dd($comment);

        $thread->threadcomments()->save($comment);

        return back()->withMessage('Comment created');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ThreadComment  $threadComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThreadComment $threadComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ThreadComment  $threadComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThreadComment $threadComment)
    {
        //
        dd($threadComment->id);
        $threadComment->delete();
        return back()->withMessage('Comment successfully deleted');
    }
}
