<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \Badcow;

class LoremController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lorem-ipsum.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # validation
        $this->validate($request, [
            'numParagraphs'=>'required|numeric|min:1|max:9',
        ]);
        # grab form value
        $numParagraphs = $request->input('numParagraphs');

        # generate text using Badcow
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraph = $generator->getParagraphs($numParagraphs);
        $textArray = array(); # blank array

        # this way in the html there are proper p tag pairs around each paragraph
        foreach($paragraph as $paragraphs) {
            array_push($textArray, '<p>'.$paragraphs.'</p>');
        }
        $text = implode("", $textArray);

        # display results
         return view('lorem-ipsum.store', ['text'=>$text]);
    }
}
