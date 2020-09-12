@extends('layouts.app')
@section('content')
{{$heading}}
@endsection
@section('sub')
@if(count($services) > 0)
    
    @foreach($services as $s)
        {{$s}}    |
    @endforeach
    
@endif
@endsection