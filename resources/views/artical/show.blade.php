@extends('default')

@section('content')

@foreach($articals as $artical)

    <h1>{{$artical['title']}}</h1>
    {{$artical['body']}}

@endforeach

@stop