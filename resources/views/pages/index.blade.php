@extends('layouts.app')

@section('content')
    {{-- <h1>Welcome To Laravel</h1> --}}
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel application from the "Laravel From Scratch" Youtube series</p>
        <p>
            <a href="/login" class="btn btn-primary btn-lg">Login</a>
            <a href="/register" class="btn btn-success btn-lg">Register</a>
        </p>
    </div>
@endsection