@extends('template')
@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Laravel flashcards</h1>
        <p>Pass that test!</p>
        <p>
            @guest
                <a href="#" class="btn btn-primary btn-lg" role="button">Login </a>
                <a href="#" class="btn btn-primary btn-lg" role="button">Create an account</a>
            @else
                <a href="#" class="btn btn-primary btn-lg" role="button">Revise</a>
                <a href="#" class="btn btn-primary btn-lg" role="button">Create cards</a>
            @endguest
        </p>
    </div>
    <example-component></example-component>
</div>
@endsection
