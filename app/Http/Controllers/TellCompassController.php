<?php

namespace App\Http\Controllers;

use App\TellCompass;
use Illuminate\Http\Request;

class TellCompassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

        $this->validate($request,[
            'name'=>'required',
            'brand'=>'required',
            'email'=>'required',
            'socialmedia'=>'required',
            'message'=>'required'
        ]);

        $tell = $request->all();
        
        TellCompass::create($tell);
        return redirect('/contact')->withMessage('Message sent successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TellCompass  $tellCompass
     * @return \Illuminate\Http\Response
     */
    public function show(TellCompass $tellCompass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TellCompass  $tellCompass
     * @return \Illuminate\Http\Response
     */
    public function edit(TellCompass $tellCompass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TellCompass  $tellCompass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TellCompass $tellCompass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TellCompass  $tellCompass
     * @return \Illuminate\Http\Response
     */
    public function destroy(TellCompass $tellCompass)
    {
        //
    }
}
