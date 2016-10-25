@extends('layout.master')

@section('title')
Random User Generation
@endsection

@section('content')
<div class="container">
    <a href='/'>&larr; Home</a>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Random User Generation</h3>
            </div>
            <a href="/random-user/create">Do it again!</a>
        </div>
    </div>
</div>
<div>
    {!! $text !!}
</div>
@endsection
