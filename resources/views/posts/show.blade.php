@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
@endsection

@section('sub')
    <p>{{$post->body}}</p>
    <br>
    <p>{{$post->created_at}}</p>

    <hr>
    <a href="/posts" class = "btn btn-default">Go Back</a>
@endsection