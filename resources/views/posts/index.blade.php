@extends('layouts.app')

@section('content')
<h1>Posts</h1>
<hr>
@endsection

@section('sub')
@if(count($posts) > 0)
    @foreach($posts as $p)
        <div class = "well">
            <div class="row">
                <div class = "col-md-4">
                <img src="/storage/cover_images/{{$p->cover_image}}" style="width:100%">
                </div>

                <div class = "col-md-8">
                    <h3><a href = "/posts/{{$p->id}}">{{$p->title}}</h3>
                    <p>{{$p->body}}</p>
                </div>
                            
            </div>
            
        </div>
    @endforeach
    {{$posts->links()}}
@else
        <p>No Posts Found... :(</p>
@endif
@endsection