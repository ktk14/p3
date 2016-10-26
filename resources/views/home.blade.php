@extends("layout.master")

@section("content")
<div class="row">
    <div class="jumbotron">
        <h1>Developer's Best Friend</h1>
        <p>
            A web application using Laravel that inludes a lorem ipsum generator and a random user generator.
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h3>Lorem Ipsum Generator</h3>
        <p>
            Lorem ipsum is scrambled Latin text that puts the focus on functionality and layout instead of what place-holder text says.
        </p>
        <br />
        <p><a href="/lorem-ipsum/create">Go forth and create scrambled Latin text!</a></p>
    </div>
    <div class="col-md-6">
        <h3>Random User Generator</h3>
        <p>
            This will help generate random user data such as first name, last name, sex, username and password.
        </p>
        <br />
        <p><a href="/random-user/create">Go forth and create random users!</a></p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <img class="img-rounded center-block" style="padding-top:34px;" height="350" src="/images/sisters.jpg" alt="Katie and younger sister, Karie" title="Random Halloween picture from childhood">
    </div>
</div>
@endsection
