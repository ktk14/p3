@extends("layout.master")

@section("title")
Lorem Ipsum Generator
@endsection

@section("content")
<div class="row">
    <a href="/">&larr; Home</a>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Lorem Ipsum Generator</h3>
        <h5>Specifiy how many paragraphs of lorem ipsum text you want (1-9)</h5>
    </div>
</div>
<div class="row">
    <form method="POST" action="/lorem-ipsum/store">
        {{ csrf_field() }}
        Number of paragraphs? <input type="text" name="numParagraphs" maxlength="1" value="{{old('numParagraphs')}}">
        <button role="button" type="submit" value="Generate Lorem Ipsum!">Generate Lorem Ipsum!</button>
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
