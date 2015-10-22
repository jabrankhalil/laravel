@extends('default')

@section('content')

@foreach($values as $value)
{{$value['name']}}<br>
{{$value['email']}}<br>
{{$value['password']}}
@endforeach
@stop