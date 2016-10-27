@extends("layout.master")

@section("title")
Random User Generator
@endsection

@section("content")
<div class="row">
    <a href="/">&larr; Home</a>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Random User Generator</h3>
        <h5>Specifiy how many random users you would like and you shall get first and last name, sex, user name, and password for each user.</h5>
    </div>
</div>
<div class="row">
    <form method="POST" action="/random-user/store" class="form-inline">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-md-3">
                <lable for="numUsers">Number of users? (Max: 27)</lable>
            </div>
            <div class="col-md-4">
                <input type="text" placeholder="14" id="numUsers" name="numUsers" maxlength="2" value="{{old('numUsers')}}">
            </div>
            <div class="col-md-5">
                <button type="submit" value="Generate Users!" class="btn btn-info">Generate Random Users!</button>
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
