<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use \RandomUser;

class UserController extends Controller
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
        # validation
        $this->validate($request, [
            'numUsers'=>'required|numeric|min:1|max:27',
        ]);
        # grab form value
        $numUsers = $request->input('numUsers');

        # generate user data using RandomUser
        $gen = new \RandomUser\Generator();
        $users = $gen->getUsers($numUsers);
        $textArray = array(); # blank array

        # loop through users object and insert values into text
        foreach($users as $user) {
            array_push($textArray, '<dl class="dl-horizontal">');
            array_push($textArray, '<dt><strong>Name: </dt><dd>'.$user->getFirstName().' '.$user->getLastName().'</strong></dd>');
            array_push($textArray, '<dt>Sex: </dt><dd>'.$user->getGender().'</dd>');
            array_push($textArray, '<dt>Username: </dt><dd>'.$user->getUsername().'</dd>');
            array_push($textArray, '<dt>Password: </dt><dd>'.$user->getPassword().'</dd>');
            array_push($textArray, '</dl>');
        }
        $text = implode("", $textArray);
        # display results
         return view('random-user.store', ['text'=>$text]);
    }
}
