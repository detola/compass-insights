<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ThreadController extends Controller
{
    function __construct()
    {
        return $this->middleware('auth')->except('index','threads','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $threads = Thread::paginate(15);
        return view('admin.threads.index', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.threads.create');
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
        $this->validate($request,[
            'subject'=>'required|min:20',
            'type'=>'required',
            'thread'=>'required|min:20'
        ]);

        auth()->user()->thread()->create($request->all());
        //Thread::create($request->all());

        return redirect('admin/threads/')->withMessage('Thread has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $thread = Thread::findOrFail($id);
        return view('thread.single',compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
        return view('admin.threads.edit', compact('thread'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
        $this->validate($request,[
            'subject'=>'required|min:20',
            'type'=>'required',
            'thread'=>'required|min:20'
        ]);

        if (auth()->user() !== $thread->user_id) {
            abort(401,'Unauthorized user');
        }

        $thread->update($request->all());

        // return redirect()->route('thread.show',$thread->id)->withMessage('Thread has been updated');
        return redirect()->route('admin.threads.edit',$thread->id)->withMessage('Thread has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        //
        if (auth()->user() !== $thread->user_id) {
            abort(401,'Unauthorized user');
        }
        $thread->delete();

        return redirect()->route('admin.threads.index')->withMessage('Thread has been deleted');
    }

    public function threads()
    {
        //
        $threads = Thread::paginate(15);
        return view('thread.index', compact('threads'));
    }

    public function editThread($id)
    {
        //
        $thread = Thread::findOrFail($id);
        return view('thread.edit', compact('thread'));
    }

    public function updateThread(Request $request, Thread $thread)
    {
        //
        $this->validate($request,[
            'subject'=>'required|min:20',
            'type'=>'required',
            'thread'=>'required|min:20'
        ]);

        if (auth()->user() !== $thread->user_id) {
            abort(401,'Unauthorized user');
        }

        $thread->update($request->all());

        return redirect()->route('thread.show',$thread->id)->withMessage('Thread has been updated');
    }
}
