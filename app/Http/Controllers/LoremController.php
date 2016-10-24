<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoremController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('random-user.create');
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
    }
/**
* This was example code I wrote in Lecture 7
* It shows, roughly, what a controller action for your P3 might look like
* It is not at all related to the Book resource.
*/
/*
public function getLoremIpsumText(Request $request)
{

    # Validate the request....

    # Generate the lorem ipsum text
    $howManyParagraphs = $request->input('howManyParagraphs');

    # Logic...
    $loremenator = \SBuck\Loremenator();
    $text = $loremenator->getParagraphs($howManyParagraphs);

    # Display the results...
    return view('lorem')->with(['text', $text]);

}
*/
}
