<?php

namespace App\Http\Controllers;

use App\NewsletterContacts;
use Illuminate\Http\Request;

class NewsletterContactsController extends Controller
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

        $this->validate($request, [
            'name'=>'required', 
            'industry'=>'required',
            'email'=>'required'
        ]);
        $news = $request->all();
        NewsletterContacts::create($news);
    
        return redirect('/#newsletter')->with('success', 'Newsletter subscription is successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsletterContacts  $newsletterContacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsletterContacts $newsletterContacts)
    {
        //
    }
}
