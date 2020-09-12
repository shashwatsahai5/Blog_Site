@extends('layouts.app');

@section('content')
 write new post

@endsection

@section('sub')
{!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data'])!!}
    <div class = "form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Blog Title'])}}
    </div>
    <div class = "form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Your thoughts here...'])}}
    </div>
    <div class = "form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

@endsection