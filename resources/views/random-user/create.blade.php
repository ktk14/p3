@extends('layout.master')

@section('title')
Random User Generator
@endsection

@section('content')
<div class="row">
    <a href='/'>&larr; Home</a>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Random User Generator</h3>
        <h5>Specifiy how many random users you would like and you shall get first and last name, sex, user name, and password for each user.</h5>
    </div>
</div>
<div class="row">
    <form method='POST' action='/random-user/store'>
        {{ csrf_field() }}
        <label for="numUsers">Number of users?</label> <input type='text' name='numUsers' maxlength="2" value='{{old("numUsers")}}'> (Max: 27)
        <button type='submit' value='Generate Users!'>Generate Random Users!</button>
        @if(count($errors) > 0)
        <ul class="text-danger list-unstyled">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </form>
</div>
@endsection
