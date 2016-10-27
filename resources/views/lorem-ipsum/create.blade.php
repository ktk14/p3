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
    <form method="POST" action="/lorem-ipsum/store" class="form-inline">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-md-3">
                <lable for="numParagraphs">Number of paragraphs?</label>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="14" id="numParagraphs" name="numParagraphs" maxlength="1" value="{{old('numParagraphs')}}">
                </div>
                <div class="col-md-5">
                    <button type="submit" value="Generate Lorem Ipsum!" class="btn btn-info">Generate Lorem Ipsum!</button>
                </div>
            </div>
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
