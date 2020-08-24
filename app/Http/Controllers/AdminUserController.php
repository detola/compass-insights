<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequests;
use App\Http\Requests\UserEditRequests;


use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::all();
        $users = User::paginate(15);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required | email',
            'role_id' => 'required',
            'password' => 'required',
            'is_active' => 'required'
        ]);

        $user = new User();

        // if (trim($request->password == ''))
        // {
        //     $input = $request->except('password');
        // }
        // else{

        //     $input = $request->all();

        //     $input['password'] = bcrypt($request->password);

        // }

        if($file = $request->file(['photo_id']))
        {
            $name = time() . $file->getClientOriginalName();

            $size = $file->getClientSize();

            $file->move('images', $name);

            $photo = Photo::create(['path'=>$name, 'size'=>$size]);

            $input['photo_id'] = $photo->id;

        }

        //dd($user);

        $user->create($input);

        //Session::flash('success-msg', 'User has been created.');

        return redirect('/admin/users')->withMessage('User has been created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::findOrFail($id);

        return view('admin.users.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);

        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.edit', compact('user','roles'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required | email',
            'role_id' => 'required',
            'is_active' => 'required'
        ]);

        $user = User::findOrFail($id);

        // if(trim($request->password == ''))
        // {
        //     $input = $request->except('password');
        // }
        // else{
        //     $input = $request->all();

        //     $input['password'] = bcrypt($request->password);

        // }

        if($file = $request->file(['photo_id']))
        {
            $name = time() . $file->getClientOriginalName();

            $size = $file->getClientSize();

            $file->move('images', $name);

            $photo = Photo::create(['path'=>$name, 'size'=>$size]);

            $input['photo_id'] = $photo->id;
        }

        $user->update($input);

        //Session::flash('success-msg', 'User has been updated.');

        return redirect('/admin/users')->withMessage('User has been updated.');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $user = User::findOrFail($id);

       if($user->photo)
       {
           unlink(public_path() . $user->photo->path);

       }

       $user->delete();

       //Session::flash('msg', 'User has been deleted');

       return redirect('/admin/users')->withMessage('User has been deleted.');


    }
}
