@extends('layout.master')

@section('title')
Lorem Ipsum Generation
@endsection

@section('content')
<div class="container">
    <a href='/'>&larr; Home</a>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Lorem Ipsum Generation</h3>
            </div>
            <a href="/lorem-ipsum/create">Do it again!</a>
        </div>
    </div>
    <div class="container">
        {!! $text !!}
    </div>
</div>
@endsection
