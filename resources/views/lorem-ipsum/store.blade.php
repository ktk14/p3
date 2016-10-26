@extends('layout.master')

@section('title')
Lorem Ipsum Generation
@endsection

@section('content')
<div class="row">
    <a href='/'>&larr; Home</a>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Lorem Ipsum Generation</h3>
    </div>
    <a href="/lorem-ipsum/create">Do it again!</a>
</div>
<div class="row">
    <div class="col-md-12" style="background-color:#BFE5D8;">
        {!! $text !!}
    </div>
</div>
@endsection
