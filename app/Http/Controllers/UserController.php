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
            array_push($textArray, '<ul class="list-unstyled">');
            array_push($textArray, '<li><strong>Name: '.$user->getFirstName().' '.$user->getLastName().'</strong></li>');
            array_push($textArray, '<li>Sex: '.$user->getGender().'</li>');
            array_push($textArray, '<li>Username: '.$user->getUsername().'</li>');
            array_push($textArray, '<li>Password: '.$user->getPassword().'</li>');
            array_push($textArray, '</ul>');
        }
        $text = implode("", $textArray);
        # display results
         return view('random-user.store', ['text'=>$text]);
    }
}
