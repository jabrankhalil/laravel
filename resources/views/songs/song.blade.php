@extends('default')

@section('content')

@foreach($info as $infos)

<a href="/students/{{$infos['id']}}">
{{$infos['name']}}
{{$infos['father_name']}}
{{$infos['roll_number']}}
</a>

@endforeach
@stop