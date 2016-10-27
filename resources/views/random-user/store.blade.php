@extends("layout.master")

@section("title")
Random User Generation
@endsection

@section("content")
<div class="row">
    <a href="/">&larr; Home</a>
</div>
<div class="row">
    <div class="col-md-8">
        <h3>Random User Generation</h3>
    </div>
    <div class="col-md-4">
        <a href="/random-user/create" class="btn btn-info">Do it again!</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12" style="background-color:#BFE5D8;">
        {!! $text !!}
    </div>
</div>
@endsection
