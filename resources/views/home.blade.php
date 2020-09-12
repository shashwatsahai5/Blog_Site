@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                    {{ __('You are logged in!') }}<br><br><br>
                    
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $p)
                        <tr>
                            <td>{{$p->title}}</td>
                            <td><a href="posts/{{$p->id}}/edit" class = "btn btn-default">Edit</td>
                            <td>
                                {!!Form::open(['action' => ['PostController@destroy', $p->id], 'method' => 'POST', 'class'=>'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}

                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class = "jumbotron">You haven't written any blogs :(</div>

                    @endif

                    <br><hr>
                    <a class="btn btn-primary" href="/posts/create">Create New Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
