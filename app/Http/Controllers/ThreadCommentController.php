<?php

namespace App\Http\Controllers;

use App\ThreadComment;
use Illuminate\Http\Request;
use App\Thread;
use Illuminate\Support\Facades\Auth;

class ThreadCommentController extends Controller
{
    
    public function addThreadComment(Request $request)
    {
        //dd($request);

        $user = Auth::user();

        $this->validate($request,[
            'body'=>'required'
        ]);

        $data = [
            'user_id' => $user->id,
            'body' => $request->body,
            'commentable_id' => $request->commentable_id,
            'commentable_type' => $request->commentable_type
        ];

        ThreadComment::create($data);

        return redirect()->back()->withMessage('Your comment has been added.');

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
