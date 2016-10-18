@extends('layout.master')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Developer's Best Friend</h1>
            <p>
                A web application using Laravel that inludes a lorem ipsum generator and a random user generator.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Lorem Ipsum Generator</h3>
                    <p>
                        Lorem ipsum is scrambled Latin text that facilitaties focus to be on functionality and layout instead of what place-holder text says.
                    </p>
                        <br />
                        <p><a href="/lorem-ipsum">Go forth and create scrambled Latin text!</a></p>
            </div>
            <div class="col-md-4">
                    <h3>Random User Generator</h3>
                        <p>
                            This will help generate random user data such as name, birth date and brief lorem ipsum style bio.
                        </p>
                        <br />
                        <p><a href="/random-user">Go forth and create random users!</a></p>
            </div>
        </div>
    </div>
@stop
