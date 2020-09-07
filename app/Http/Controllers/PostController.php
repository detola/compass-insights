<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // function __construct()
    // {
    //     return $this->middleware('auth')->except('index');
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        
        return view('admin.posts.index', compact('posts'));
        //dd($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create 
        $categories = Category::all();

         if($categories->count() == 0 )
         {
             //Session::flash('info', 'You must some categories before attempting to create a post');

             return redirect()->back()->withMessage('You must some categories before attempting to create a post');
         }

        $category = Category::pluck('name', 'id')->all();

        return view('admin.posts.create', compact('category', 'categories'));
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
        //dd($request);
        $this->validate($request,[

            'title' => 'required',
            'body' => 'required'
            // 'subject'=>'required|min:20',
            // 'type'=>'required',
            // 'thread'=>'required|min:20'
        ]);
        $post = $request->all();

        // $title = \str_slug($request->title, '-');

        //$user = Auth::user();

        if($file = $request->file('photo_id'))
        {
            $name = time() . $file->getClientOriginalName();

            $size = $file->getSize();

            $file->move('images', $name);

            $photo = Photo::create(['path'=>$name, 'size'=>$size]);

            $post['photo_id'] = $photo->id;
        }

        //$user->
        //Post::create($post);
        auth()->user()->posts()->create($post);

        //Session::flash('success-msg', 'Post has been created.');


        return redirect()->route('admin.posts.index')->withMessage('Post has been created.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);
        // dd($post);

        $categories = Category::pluck('name', 'id')->all();

         return view('admin.posts.edit', compact('post',  'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //\
//dd('$request');
        $this->validate($request,[

            'title' => 'required',
            'body' => 'required'
            // 'subject'=>'required|min:20',
            // 'type'=>'required',
            // 'thread'=>'required|min:20'
        ]);
        $post = Post::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('photo_id'))
        {
            $name = time() . $file->getClientOriginalName();

            $size = $file->getSize();

            $file->move('images', $name);

            $photo = Photo::create(['path'=>$name, 'size' => $size]);

            $input['photo_id'] = $photo->id;
        }

        //auth()->user()->post()->update($input);

        $post->update($input);

        //Session::flash('success-msg', 'Post has been updated.');


        return redirect()->route('admin.posts.index')->withMessage('Post has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);

        if($post->photo)
        {
            unlink(public_path() . $post->photo->path);
        }

        $post->delete();

        //Session::flash('msg', 'Post has been deleted.');

        return redirect()->route('admin.posts.index')->withMessage('Post has been deleted');
    }

    public function post($slug)
    {
        $post = Post::findBySlug($slug);

        $categories = Category::all();

        return view('blog.single', compact('post', 'categories'));
    }

    public function blog()
    {
        return view('blog.index');
    }
}
