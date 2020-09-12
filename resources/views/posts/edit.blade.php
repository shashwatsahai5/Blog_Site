@extends('layouts.app');

@section('content')
 Edit post

@endsection

@section('sub')
{!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST'])!!}
    <div class = "form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Blog Title'])}}
    </div>
    <div class = "form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Your thoughts here...'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

@endsection